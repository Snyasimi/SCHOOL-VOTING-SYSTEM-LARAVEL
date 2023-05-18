<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Models\Candidates;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(Auth::check())
        {

            return view('Users.index')->with(['Candidates' => Candidates::where('Application_status',true)->lazy()]);

        }

        return view('Home')->with(['Candidates' => Candidates::with('Voter')->where('Application_status',true)->lazy() ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth.Signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddUserRequest $request)
        {

        $validate = $request->validated();

        
        $user =  new User;

        $user->Name = $validate['Name'];
        $user->Email = $validate['Email'];
        $user->RegNumber = $validate['RegNo'];
        $user->password = bcrypt($validate['password']);
        $user->save();

        Auth::login($user);
        return redirect()->route('Home');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //return view('User.show',['User' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
