<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
        if(auth()->user()->is_admin){
            $users = User::all();
        return view('components.layouts.users',['users'=>$users]);
        }else{
            return to_route('welcome')->withErrors('you are not admin');
        }

    }
    public function create(Request $request){
        $validated = $request->validate([
            'name'=> ['required','min:8','max:50'],
            'password'=>['required','min:8','confirmed'],
            'email'=>['required','email']
        ]);

        User::create($validated);
        return view('components.layouts.home');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'password'=>['required'],
            'email'=>['required']
        ]);
        $auth = Auth::attempt($validated);
        if($auth){
            return to_route('about',['auth'=>$auth]);
        }else{
            return view('components.auth.login')->with('error','unauthenticated');
        }

    }

    public function logout(){
        Auth::logout();
        return to_route('login');
    }
    public function show(){

    }
    public function edit(){

    }
    public function  update(){

    }
    public function delete(){

    }
}
