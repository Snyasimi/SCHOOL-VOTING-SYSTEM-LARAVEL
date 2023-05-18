<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function Signup()
    {
        return view('Auth.Signup');
    }

    public function register(AddUserRequest $request)
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

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
     
            return redirect()->intended(route('Users.index'));
        }

        return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        
    }

   

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

}
