<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCandidateRequest;
use App\Models\Candidates;
use App\Models\Positions;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $Candidates = Candidates::with('user')->chunk(100, function ($candidates) {
        //     return view('Candidates.vote')->with([
        //         'Chairpersons' => $candidates->where('Position', 'CHAIR PERSON')->where('Application_status', true)->get(),
        //         'ViceChairs' => $candidates->where('Position', 'VICE CHAIR PERSON')->where('Application_status', true)->get(),
        //         'Secretarygens' => $candidates->where('Position', 'SECRETARY GENERAL')->where('Application_status', true)->get(),
        //         'Sportsandwelfares' => $candidates->where('Position', 'SPORTS AND WELFARE')->where('Application_status', true)->get(),
        //     ]);
        // });
        


        $Candidates = Candidates::with('Voter')->get();

        return view('Candidates.vote')->with(['Chairpersons' => $Candidates->where('Position','CHAIR PERSON')->where('Application_status',true),
                                             'ViceChairs' => $Candidates->where('Position','VICE CHAIR PERSON')->where('Application_status',true),
                                             'Secretarygens' => $Candidates->where('Position','SECRETARY GENERAL')->where('Application_status',true),
                                             'Academicsecretaries' => $Candidates->where('Position','ACADEMIC SECRETARY')->where('Application_status',true),
                                             'Sportsandwelfares' => $Candidates->where('Position','SPORTS AND WELFARE')->where('Application_status',true),
                                             ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Candidates.Apply',['positions' => Positions::lazy() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddCandidateRequest $request)
    {
        $validate = $request->validated();
        //dd($validate);
        //DB::transaction(function() use($validate,$request)
        //{
        
            $user = Auth::user();
            
            $Candidate = new  Candidates();
            $Candidate->User_id = $user->id;
            $Candidate->Position = $validate['Position'];
            $Candidate->Slogan = $validate['Slogan'];
            $Candidate->path_to_image = $request->file('Image')->store('public/CandidateImgs');
            $Candidate->path_to_application_letter = $request->file('Application_letter')->store('public/Application_letters');
            $Candidate->Votes = 0;
            
            $Candidate->save();

            // Candidates::create(
            //     ['User_id' => $user->id],
            //     ['Position' => $validate['Position']],
            //     ['Slogan' => $validate['Slogan']],
            //     ['path_to_image' => $request->file('Image')->store('public/CandidateImgs')],
            //     ['path_to_application_letter' => $request->file('Application_letter')->store('public/Application_letters')],
            //     ['Votes' => 0],

            // );
       // });

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Candidate = Candidates::with('Voter')->findOrFail($id);
        return view('Candidates.show',['Candidate' => $Candidate]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidates $candidates)
    {
        return view('Candidate.Apply',['candidate'=> $candidates]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidates $candidates)
    {
       
        $validate = $request->validated();
        dd($validate);
        $candidates->Position = $validate['Position'];
        $candidates->Slogan = $validate['Slogan'];
        $candidates->path_to_image = $validate['Image']->store('CandidateImgs');
        $candidates->path_to_application_letter = $validate['Application_letter']->store('Application_letters');
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidates $candidates)
    {
        $candidates->delete();

        return redirect()->back();
 
    }
}
