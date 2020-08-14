<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Student;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $data=Professor::where('email',request('email'))->where('password',request('password'))->first();
        if($data){
            return redirect('/professorPage');
        }else{
            $d=Student::where(['email'=>$request->email,'password'=>$request->password])->first();
            if($d){
                return redirect('/studentPage');
            }
        }
        return redirect()->back();
    }

    public function professorPage(){
        return view('professor.index');
    }

    public function studentPage(){
        return view('student.index');
    }
}
