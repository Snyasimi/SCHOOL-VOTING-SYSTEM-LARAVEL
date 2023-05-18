<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use App\Models\Positions;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index()
    {
        return view('AdminView.index');
    }

    public function AddPosition()
    {
        $positions = Positions::lazy();
        return view('AdminView.positions')->with(['positions' => $positions]);
    }

    public function Applications()
    {
        return view('AdminView.Applications')->with(['Applicants' => Candidates::with('Voter')->where('Application_status',false)->lazy()]);
    }
    
    public function acceptapplication($id)
    {

        Candidates::findorfail($id)->update(['Application_status' => true ]);

      return redirect()->back();

    }
    public function candidates()
    {
        return view('AdminView.candidates')->with(['Candidates' => Candidates::lazy()]);
    }

    public function ChangeStatus($id)
    {

        $can = Candidates::findorfail($id);

        if ($can->Application_status == true)
        {
            $can->Application_status = false;
            $can->save();
            return redirect()->back()->with(['message' => 'Candidate Disqualified']);
        }

        $can->Application_status = true;
        $can->save();
        return redirect()->back()->with(['message' => 'Candidate Re-enstated']);
        
        

    }
}
