<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students_result;

class AdmissionResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Students_result::all();
        return view('admission.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'student_name'  =>  'required|max:55|unique:students_results',
            'student_class'  =>  'required|max:11|numeric|unique:students_results',
            'student_roll'  =>  'required|numeric|unique:students_results',
            'student_result'  =>  'required|max:55',
            ]);
        $results = new Students_result;
        $results->student_name = $request->student_name; 
        $results->student_class = $request->student_class; 
        $results->student_roll = $request->student_roll; 
        $results->student_result = $request->student_result; 
        $results->save();
        session()->flash('message','Data uploded successfuly');
        return redirect('/msys/admission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $showStudentDetail = Students_result::find($id);
        return view('admission.edit',compact('showStudentDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'student_name'  =>  'required|max:55|unique:students_results',
            'student_class'  =>  'required|max:11|numeric|unique:students_results',
            'student_roll'  =>  'required|numeric|unique:students_results',
            'student_result'  =>  'required|max:55',
            ]);

        $showStudentDetail = Students_result::find($id);
        $showStudentDetail->update(request(['student_name','student_class','student_roll','student_result']));
        
        
        session()->flash('message','Student Data is updated');
        return redirect('/msys/admission');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Students_result::destroy($id);
        session()->flash('message','Student data is deleted');
        return redirect('/msys/admission');
    }
}
