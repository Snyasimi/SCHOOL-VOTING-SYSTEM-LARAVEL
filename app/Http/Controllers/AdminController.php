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
                                                ->orderBy('Votes','desc')->where('Position','CHAIRPERSON')->lazy(),

            'Vicechair' => Candidates::with(['Voter'])->where('Application_status',true)
                                                ->where('Position','VICE CHAIRPERSON')->orderBy('Votes','desc')->lazy(),

            'Secretary_general' => Candidates::with(['Voter'])->where('Application_status',true)
                                                ->where('Position','SECRETARY GENERAL')->orderBy('Votes','desc')->lazy()
        ]);
    }


    public function Applications()
    {
        return view('AdminView.Applications')->with(['Applicants' => Candidates::with('Voter')->where('Application_status',false)->orderBy('Votes','desc')->lazy()]);
    }
    
    public function candidates()
    {
        return view('AdminView.candidates')->with(['Candidates' => Candidates::with('Voter')->where('Application_status',true)->orderBy('Votes','desc')->lazy()]);
    }



    public function Results(Request $request)
    {
        
        if ($request->isMethod('get'))
        {
            $year = now()->year;

                return view('AdminView.Results')
                        ->with([
                            'Chairperson' => Candidates::with(['Voter'])->where('Application_status',true)->whereYear('created_at',$year)
                            ->where('Position','CHAIRPERSON')->orderBy('Votes','desc')->limit(5)->lazy(),

                            'ViceChairperson' => Candidates::where('Application_status',true)->whereYear('created_at',$year)
                            ->where('Position','VICE CHAIRPERSON')->orderBy('Votes','desc')->limit(5)->lazy(),

                            'Treasurer' => Candidates::where('Application_status',true)->whereYear('created_at',$year)
                            ->where('Position','TRESUARER')->orderBy('Votes','desc')->limit(5)->lazy(),

                            'Secretarygeneral' => Candidates::where('Application_status',true)->whereYear('created_at',$year)
                            ->where('Position','SECRETARY GENERAL')->orderBy('Votes','desc')->limit(5)->lazy(),

                            'Sportsandwelfare' => Candidates::where('Application_status',true)->whereYear('created_at',$year)
                            ->where('Position','SPORTS AND WELFARE')->orderBy('Votes','desc')->limit(5)->lazy()
                        
                        ]
                    
                    );
        }


        $year = $request->validate([
            'Year' => ['required']
        ]);


        return view('AdminView.Results')->with([
            'Chairperson' => Candidates::where('Application_status',true)->whereYear('created_at',$year['Year'])
                ->where('Position','CHAIRPERSON')->orderBy('Votes','desc')->limit(5)->lazy(),

            'ViceChairperson' => Candidates::where('Application_status',true)->whereYear('created_at',$year['Year'])
                ->where('Position','VICE CHAIRPERSON')->orderBy('Votes','desc')->limit(5)->lazy(),

            'Treasurer' => Candidates::where('Application_status',true)->whereYear('created_at',$year['Year'])
                ->where('Position','TRESUARER')->orderBy('Votes','desc')->limit(5)->lazy(),

            'Secretarygeneral' => Candidates::where('Application_status',true)->whereYear('created_at',$year['Year'])
                ->where('Position','SECRETARY GENERAL')->orderBy('Votes','desc')->limit(5)->lazy(),

            'Sportsandwelfare' => Candidates::where('Application_status',true)->whereYear('created_at',$year['Year'])
                ->where('Position','SPORTS AND WELFARE')->orderBy('Votes','desc')->limit(5)->lazy()
        ]);

        // return view('AdminView.Results')->with([
        //     'Chairperson' => Candidates::where('Application_status',true)->whereYear('Position',$year['Year']),
        //     'ViceChairperson' => Candidates::where('Application_status',true)->whereYear('Position',$year['Year']),
        //     'Treasurer' => Candidates::where('Application_status',true)->whereYear('Position',$year['Year']),
        //     'Secretarygeneral' => Candidates::where('Application_status',true)->whereYear('Position',$year['Year']),
        //     'Sportsandwelfare' => Candidates::where('Application_status',true)->whereYear('Position',$year['Year'])
        // ]);

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
