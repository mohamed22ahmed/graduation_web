<?php

namespace App\Http\Controllers;

use App\Exam;
use App\McqQuestion;
use App\Student_exam;
use App\TfQuestion;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    // add Exam functions
    public function addExam(){
        return view('professor.addExam');
    }
    public function addExamDone(Request $req){
        request()->validate([
            'name'=>'required',
        ]);
        Exam::create(['name'=>request('name')]);
        return redirect('/professorPage');
    }

    // delete Exam functions
    public function deleteExam(){
        return view('professor.deleteExam');
    }
    public function deleteExamDone(Request $req){
        request()->validate([
            'name'=>'required',
        ]);
        Exam::where('name',request('name'))->delete();
        return redirect('/professorPage');
    }

    // add MCQ question functions
    public function addMcq(){
        $data=Exam::all();
        return view('professor.addMcq',compact('data'));
    }
    public function addMcqDone(Request $req){
        request()->validate([
            'exam'=>'required',
            'question'=>'required',
            'c1'=>'required',
            'c2'=>'required',
            'c3'=>'required',
            'c4'=>'required',
            'correct'=>'required',
        ]);
        McqQuestion::create([
            'exam_id'=>$req->exam,
            'question'=>$req->question,
            'first_choice'=>$req->c1,
            'second_choice'=>$req->c2,
            'third_choice'=>$req->c3,
            'forth_choice'=>$req->c4,
            'correct_answer'=>$req->correct
        ]);
        return redirect('/professorPage');
    }

    // Delete MCQ Question functions
    public function deleteMcq(){
        $data=Exam::all();
        return view('professor.deleteMcq',compact('data'));
    }
    public function deleteMcqDone(Request $req){
        request()->validate([
            'exam'=>'required',
            'name'=>'required',
        ]);
        McqQuestion::where('question',$req->name)->where('exam_id',$req->exam)->delete();
        return redirect('/professorPage');
    }

    //add T&F question functions
    public function addTf(){
        $data=Exam::all();
        return view('professor.addTf',compact('data'));
    }
    public function addTfDone(Request $req){
        request()->validate([
            'exam'=>'required',
            'question'=>'required',
            'correct'=>'required',
        ]);
        TfQuestion::create([
            'exam_id'=>$req->exam,
            'question'=>$req->question,
            'correct_answer'=>$req->correct
        ]);
        return redirect('/professorPage');
    }

    // Delete T & F Question functions
    public function deleteTf(){
        $data=Exam::all();
        return view('professor.deleteTf',compact('data'));
    }
    public function deleteTfDone(Request $req){
        request()->validate([
            'exam'=>'required',
            'name'=>'required',
        ]);
        TfQuestion::where('question',$req->name)->where('exam_id',$req->exam)->delete();
        return redirect('/professorPage');
    }

    //choose Exam to show functions
    public function chooseExam(){
        $data=Exam::all();
        return view('professor.chooseExam',compact('data'));
    }
    public function chooseExamDone(Request $req){
        request()->validate([
            'exam'=>'required',
        ]);
        session()->put('id',$req->exam);
        return redirect('/showExam');
    }

    //show Exam functions
    public function showExam(){
        $id=session()->get('id');
        $McqData=McqQuestion::where('exam_id',$id)->get();
        $TfData=TfQuestion::where('exam_id',$id)->get();

        return view('professor.showExamProfessor',compact('McqData','TfData'));
    }
    public function showExamDone(Request $req){
        request()->validate([
            'exam'=>'required',
        ]);
        session()->put('id',$req->exam);
        return redirect('/showExam');
    }

    //edit MCQ question
    public function editMcq($id){
        $records=McqQuestion::find($id);
        return view('professor.editMcq',compact('records'));
    }
    public function updateMcq(Request $request,$id){
        $data=McqQuestion::find($id);
        if($request->question!="")
            $data->question=$request->question;
        if($request->c1!="")
            $data->first_choice=$request->c1;
        if($request->c2!="")
            $data->second_choice=$request->c2;
        if($request->c3!="")
            $data->third_choice=$request->c3;
        if($request->c4!="")
            $data->forth_choice=$request->c4;
        if($request->correct!="")
            $data->correct_answer=$request->correct;
        $data->save();
        return redirect('/showExam');
    }

    // delete Question uding trash icon
    public function destroyMcq($id){
        $data=McqQuestion::find($id);
        $data->delete();
        return redirect('/showExam');
    }

    //edit T & F question function
    public function editTf($id){
        $records=TfQuestion::find($id);
        return view('professor.editTf',compact('records'));
    }
    public function updateTf(Request $request,$id){
        $data=TfQuestion::find($id);
        if($request->question!="")
            $data->question=$request->question;
        if($request->correct!="")
            $data->correct_answer=$request->correct;
        $data->save();
        return redirect('/showExam');
    }

    // delete Question uding trash icon dunction
    public function destroyTf($id){
        $data=TfQuestion::find($id);
        $data->delete();
        return redirect('/showExam');
    }

    //set timer for exam functions
    public function setTimer(){
        $data=Exam::all();
        return view('professor.setTimer',compact('data'));
    }
    public function setTimerDone(Request $req){
        request()->validate([
            'exam'=>'required',
            'timer'=>'required',
        ]);
        $id=$req->exam;
        $data=Exam::find($id);
        $data->duration=$req->timer;
        $data->save();
        return redirect('/professorPage');
    }

    //choose Exam to show results
    public function examResult(){
        $data=Exam::all();
        return view('professor.examResult',compact('data'));
    }
    public function examResultDone(Request $req){
        request()->validate([
            'exam'=>'required',
        ]);
        session()->put('idx',$req->exam);
        return redirect('/showResult');
    }

    //show Exam functions
    public function showResult(){
        $id=session()->get('idx');
        $data=Student_exam::where('exam_id',$id)->get();
        return view('professor.showResult',compact('data'));
    }
    public function showResultDone(Request $req){
        request()->validate([
            'exam'=>'required',
        ]);
        session()->put('id',$req->exam);
        return redirect('/showExam');
    }
}
