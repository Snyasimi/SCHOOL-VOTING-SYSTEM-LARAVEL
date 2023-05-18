<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteRequest;
use App\Models\Candidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotingController extends Controller
{
    public function vote(VoteRequest $request)
    {

        
    DB::transaction(function() use($request)
    {

        $validate = $request->validated();
        //dd($validate);
        $request->user()->Has_voted = true;
        $request->user()->save();
        Candidates::whereIn('User_id',$validate)->increment('votes',1);

    });

        return redirect()->route('Home');


    }
}
