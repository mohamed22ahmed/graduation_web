<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded=[];

    public function exams(){
        return $this->belongsToMany('App\Exam','student_exams')->withPivot('degree');
    }
}
