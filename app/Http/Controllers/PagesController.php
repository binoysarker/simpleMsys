<?php

namespace App\Http\Controllers;

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
    


    
}
