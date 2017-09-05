<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students_result;
class ListController extends Controller
{
    public function index()
    {
    	$showData = Students_result::all();
    	return view('list.index',compact('showData'));
    }
    public function create(Request $request)
    {
    	$details = new Students_result;
    	$details->student_name = $request->student_name;
    	$details->student_class = $request->student_class;
    	$details->student_roll = $request->student_roll;
    	$details->student_result = $request->student_result;
    	$details->save();
    	return redirect('/msys/list');
    	
    }
    public function delete(Request $request)
    {
    	$deleteData = Students_result::where('id',$request->id);
    	$deleteData->delete();
    	return redirect('/msys/list');
    }
}
