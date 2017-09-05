<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentProfile;

class Students_result extends Model
{
    protected $fillable = ['student_name','student_class','student_roll','student_result'];

    public function profile()
    {
    	return $this->hasOne(StudentProfile::class);
    }
}
