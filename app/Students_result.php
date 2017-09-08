<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentProfile;

class Students_result extends Model
{
    protected $fillable = ['student_name','student_class','student_roll','student_result'];
    protected $hidden = ['student_profile_id'];

    public function profile()
    {
    	return $this->belongsTo(StudentProfile::class,'student_profile_id');
    }
}
