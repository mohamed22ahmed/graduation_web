<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Exam;
use App\Professor;
use App\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function logout(){
        return redirect('/admin/login');
    }

    public function loginview(){
        return view('admin.login');
    }

    public function login(Request $request){
        request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $data=Admin::where('email',request('email'))->where('password',request('password'))->first();
        if($data){
            session()->put('admin_id',$data->id);
            session()->put('admin_name',$data->name);
            return redirect('/adminPage');
        }
        return redirect()->back()->with('login_error',"Email or Password doesn't correct");
    }

    public function adminPage(){
        $students=Student::all();
        return view('admin.show_students',compact('students'));
    }

    public function delete_student_view(){
        $students=Student::all();
        return view('admin.delete_student',compact('students'));
    }

    public function delete_student($id){
        Student::find($id)->delete();
        return redirect('/adminPage');
    }

    public function add_student_view(){
        $students=Student::all();
        $students_number=count($students);
        return view('admin.add_student',compact('students_number'));
    }

    public function add_student(Request $request){
        $admin=new Student;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->save();
        return redirect('/adminPage');
    }

    //show Exam functions
    public function show_degrees(){
        $data=Exam::with('students')->get();
        return view('admin.showResult',compact('data'));
    }

    public function show_professors(){
        $professors=Professor::all();
        return view('admin.show_professors',compact('professors'));
    }

    public function delete_professor_view(){
        $professors=Professor::all();
        return view('admin.delete_professor',compact('professors'));
    }

    public function delete_professor($id){
        Professor::find($id)->delete();
        return redirect('/adminPage');
    }

    public function add_professor_view(){
        $professors=Professor::all();
        $professors_number=count($professors);
        return view('admin.add_professor',compact('professors_number'));
    }

    public function add_professor(Request $request){
        $admin=new Professor;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->subject=$request->subject;
        $admin->save();
        return redirect('/adminPage');
    }

}
