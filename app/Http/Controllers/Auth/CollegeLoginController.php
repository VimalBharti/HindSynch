<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\College;
use Auth;

class CollegeLoginController extends Controller
{

    public function __construct()
    {
        $this-> middleware('guest:college', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.college-login');
    }

    public function login(Request $request){
        // validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password'  => 'required|min:6'
        ]);

        // Attempt to log the user in
        if(Auth::guard('college')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful, then redirect to their location
            return redirect()->intended(route('college.dashboard'));
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('college')->logout();
        return redirect('/');
    }
}
