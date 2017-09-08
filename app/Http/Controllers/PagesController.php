<?php

namespace App\Http\Controllers;

use App\StudentProfile;
use Illuminate\Http\Request;
use App\Students_result;
use App\EventModel;


class PagesController extends Controller
{
    public function getIndex()
    {
    	return view('pages.index');
    }
    public function getEditAdmission()
    {
        return view('validate.editAdmission');
    }

//    section to get the search result

    public function getResult(Request $request)
    {

        switch ($request->options){
            case 'result':
                $result = new Students_result;
                $result = $result->where('student_class',(int)($request->class))->get();
                return view('pages.index',compact('result'));
                break;
            case 'studentDetail':
                $profile = new StudentProfile;
                $profile = $profile->where('year',$request->year)->get();
                return view('pages.index',compact('profile'));
            default:
                session()->flash('message','No Data to display');
                return back();
        }
    }


    
}
