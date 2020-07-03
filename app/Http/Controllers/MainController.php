<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Professor;
class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function login(){
        return view('studentLogin');
    }
    public function studentLogin(Request $req){
        request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $data=Student::where('email',request('email'))->where('password',request('password'))->first();
        if($data){
            return redirect('/studentPage');
        }
        return redirect()->back();
    }

    public function professorLogin(){
        return view('professorLogin');
    }
    public function professorLoginTest(Request $req){
        request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $data=Professor::where('email',request('email'))->where('password',request('password'))->first();
        if($data){
            return redirect('/professorPage');
        }
        return redirect()->back();
    }

}
