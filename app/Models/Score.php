<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $table = "tbl_score";
    public function student(){
    	return $this->belongsTo(Student::class,'student_id','id');
    }
}
