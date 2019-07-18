<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use Auth;

class CompanyLoginController extends Controller
{

    public function __construct()
    {
        $this-> middleware('guest:company', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.company-login');
    }

    public function login(Request $request){
        // validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password'  => 'required|min:6'
        ]);

        // Attempt to log the user in
        if(Auth::guard('company')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful, then redirect to their location
            return redirect()->intended(route('company.dashboard'));
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('company')->logout();
        return redirect('/');
    }
}
