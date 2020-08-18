<?php

namespace App\Http\Controllers;

use App\Exam;
use App\McqQuestion;
use App\TfQuestion;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function loginExam(){
        $exams=Exam::all();
        return view('student.doExam',compact('exams'));
    }

    public function accessExam(Request $request){
        $request->validate([
            'exam'=>'required',
            'password'=>'required'
        ]);

        $exam=Exam::where(['id'=>$request->exam,'password'=>$request->password])->get();
        if(count($exam)>0){
            session()->put('exam_id',$request->exam);
            return redirect('/studentExam');
        }
        return redirect()->back()->with('error','Exam or Password not correct');
    }

    public function studentExamview(){
        $exam_id=session('exam_id');
        $exam=Exam::where('id',$exam_id)->first();
        $mcq_questions=McqQuestion::where('exam_id',$exam_id)->get();
        $tf_questions=TfQuestion::where('exam_id',$exam_id)->get();
        return view('student.studentExam',compact('exam','mcq_questions','tf_questions'));
    }

    public function studentExamSubmit(Request $request){
        // dd($request->all());
        $exam_id=session('exam_id');
        $degree=0;


    }

    public function auto_correct(){
        $degree=session('student_degree');
        return view('student.auto_correct',compact('degree'));
    }
}
