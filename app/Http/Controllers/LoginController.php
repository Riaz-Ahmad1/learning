<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class LoginController extends Controller
{
    //
    public function index(){
       
        return view('home');
    }
    
    public function login(){
        
        return view('users.login');
    }

    public function authenticate(Request $request){

        $formFields=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/admin')->with('message','You Logedin');
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');

    }

    public function admin(){
        return view('admin.index');
    }

    public function create(){
        return view('users.register');
    }

    public function store(Request $req){
       $formFields = $req->validate([
        'name'=>['required','min:3'],
        'email'=>['required','email'],
        'password'=>'required'
        // 'password'=>'required|confirmed'
       ]);

        $formFields['password'] = bcrypt($formFields['password']);
        
        $user = USER::create($formFields);

        auth()->login($user);

        return redirect('/register')->with('message','User Created and Logedin');
    }

    public function logout(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/')->with('message','User LogedOut');
    }

    
}