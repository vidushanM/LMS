<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Parent_Guardian;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class customAuthController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validate($request, [

            'name' => 'required|string||max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required'

        ]);

        $registered_name = $request->get('name');
        $registered_role = $request->get('role');

        $this->create($request->all());

        return redirect('/')->with('Status','You have registered '.$registered_name.' as '.$registered_role.' successfully');
    }

    public function showLoginForm(){
        if(Auth::guard('admin')->user()){
            return redirect('/');
        }
        else{
            return view('auth.login');
        }

    }

    public function login(Request $request){
        $this->validate($request, [

            'email' => 'required|string|email',
            'password' => 'required|string|min:6',

        ]);

        $request->session()->put('key', 'value');
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'Admin'])){
            return redirect('/admin/dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'LibraryMgr'])){
            return redirect('/library/dashboard');
        }
        elseif(Auth::attempt(['email' => $request->email,'password' => $request ->password])){

            $request->session()->put('prId', Auth::user()->name);
            return redirect('/parent/dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'AcademicMgr'])){
            return redirect('/Aadmin/Dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'FinanceMgr'])){
            return redirect('/FMadmin/dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'TransportMgr'])){
            return redirect('/Tadmin/dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'HRMgr'])){
            return redirect('/HRadmin/dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'ExamCenterMgr'])){
            return redirect('/ECadmin/dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request ->password, 'role' => 'NonAcademicMgr'])){
            return redirect('/NAadmin/dashboard');
        }
            return back()->with('Status', 'These credentials are not in our records');


        //return redirect('/')->with('Status','You have registered successfully');
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('Status','Logged out Successfully');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:adminis',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Admin
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);
    }
}
