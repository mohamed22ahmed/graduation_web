<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TfQuestion extends Model
{
    protected $guarded=[];

    public function exam(){
        return $this->belongsTo(Exam::class);
    }
}
