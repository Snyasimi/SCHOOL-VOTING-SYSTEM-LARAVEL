<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use App\Models\Positions;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index()
    {
        return view('AdminView.index')->with([
            'Total_candidates' => Candidates::where('Application_status',true)->count(),
            'Total_voters' => User::where('is_admin',false)->count(),
            'Total_positions' => Positions::count(),

            'Chairperson' => Candidates::with(['Voter'])->where('Application_status',true)
                                                ->orderBy('Votes')->where('Position','CHAIR PERSON')->lazy(),

            'Vicechair' => Candidates::with(['Voter'])->where('Application_status',true)
                                                ->where('Position','VICE CHAIR PERSON')->orderBy('Votes')->lazy(),

            'Secretary_general' => Candidates::with(['Voter'])->where('Application_status',true)
                                                ->where('Position','SECRETARY GENERAL')->orderBy('Votes')->lazy()
        ]);
    }


    public function Applications()
    {
        return view('AdminView.Applications')->with(['Applicants' => Candidates::with('Voter')->where('Application_status',false)->orderBy('Votes')->lazy()]);
    }
    
    public function candidates()
    {
        return view('AdminView.candidates')->with(['Candidates' => Candidates::with('Voter')->orderBy('Votes')->lazy()]);
    }


    public function accept($id)
    {
        try
        {
            Candidates::findorfail($id)->update(['Application_status' => true ]);
            return redirect()->back();
        }
        catch(\Exception)
        {
            return redirect()->back()->with(['message' => 'Something went wrong']);
        }
    }
    public function decline($id)
    {
        try
        {
            Candidates::findorfail($id)->update(['Application_status' => false ]);
            return redirect()->back()->with(['message' => 'Candidate Disqualified']);
        }

        catch(\Exception)
        {
            return redirect()->back()->with(['message' => 'Something went wrong']);
        }
    }
}
