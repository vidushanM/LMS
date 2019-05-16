<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        // validate the form data 
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // attempt to log the user in 
        if (Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location 
            return redirect()->intended(route('admin.index'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        //return redirect()->back()->withInput($request->only('email','remember'));
        //return redirect()->back()->withErrors($validator)->withInput('email', 'remember');
        $this->sendFailedLoginResponse($request);
        return redirect()->back()->withInput($request->only('email','remember'));
         
    }

    //to validate fail login in login page
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    public function username()
    {
        return 'email';
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
