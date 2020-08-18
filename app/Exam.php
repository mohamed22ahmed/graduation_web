<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $guarded=[];

    public function mcq_questions(){
        return $this->hasMany(McqQuestion::class);
    }

    public function tf_questions(){
        return $this->hasMany(TfQuestion::class);
    }

    public function students(){
        return $this->belongsToMany('App\Student','student_exams')->withPivot('degree');
    }

    public function professors(){
        return $this->belongsToMany(Professor::class);
    }
}
