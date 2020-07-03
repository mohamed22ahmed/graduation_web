<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $guarded=[];

    public function exams(){
        return $this->belongsToMany(Exam::class);
    }
}
