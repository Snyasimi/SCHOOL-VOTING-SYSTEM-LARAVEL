<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Candidates = "";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidates $candidates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidates $candidates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidates $candidates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidates $candidates)
    {
        //
    }
}
