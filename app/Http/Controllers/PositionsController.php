<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPositionRequest;
use App\Models\Positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('IsAdmin')->only('create');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminView.positions')->with(['positions' => Positions::with('candidate')->lazy()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddPositionRequest $request)
    {
        $validate = $request->validated();

        $Position = new Positions;
        $Position->Position = $validate['Position'];
        $Position->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Positions $positions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Positions $positions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Positions $positions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Positions $positions)
    {
        //
    }
}
