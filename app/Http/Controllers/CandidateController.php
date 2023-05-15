<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCandidateRequest;
use App\Models\Candidates;
use App\Models\Positions;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = 1;
        return view('Candidates.vote',['candidates' => $candidates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Candidates.Apply');//,['positions' => Positions::lazy() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddCandidateRequest $request)
    {
        $validate = $request->validated();
        dd($validate);
        $Candidate = new  Candidates;
        $Candidate->User_id = '01h0d29prpqw6jmhsgdp34s98g';//Auth::user()->User_id;
        $Candidate->Position = $validate['Position'];
        $Candidate->Slogan = $validate['Slogan'];
        $Candidate->path_to_image = $validate['Image']->store('CandidateImgs');
        $Candidate->path_to_application_letter = $validate['Application_letter']->store('Application_letters');
        $Candidate->Votes = 0;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidates $candidates)
    {
        return view('Candidate.show',['Candidate' => $candidates]);
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
        //
    }
}
