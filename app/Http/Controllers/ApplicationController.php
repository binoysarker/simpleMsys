<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentProfile;
use DB;
use Illuminate\Support\Facades\Storage;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentprofile = StudentProfile::all();
        return view('student-profile.index',compact('studentprofile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student-profile.create');
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
            'student_name'  =>  'required|max:55|unique:student_profiles',
            'student_fatherName'  =>  'required|max:55|unique:student_profiles',
            'student_motherName'  =>  'required|max:55|unique:student_profiles',
            'student_mobileNumber'  =>  'required|regex:/(01)[0-9]{9}/',
            'student_email'  =>  'required|max:55|email|unique:student_profiles',
            'profile'  =>  'required|max:55|unique:student_profiles',
            'student_subject'  =>  'required|max:55|unique:student_profiles',
            'student_address'  =>  'required|max:191',
            ]);
        $studentprofile = new StudentProfile;
        $studentprofile->student_name = $request->student_name;
        $studentprofile->student_fatherName = $request->student_fatherName;
        $studentprofile->student_motherName = $request->student_motherName;
        $studentprofile->student_mobileNumber = $request->student_mobileNumber;
        $studentprofile->student_email = $request->student_email;
        $studentprofile->student_subject = $request->student_subject;
        $studentprofile->student_address = $request->student_address;
        
        // file upload section


        $studentprofile->profile = $request->file('profile')->getClientOriginalName();
        
        if ($request->hasFile('profile')) {
            $request->profile->storeAs('public',$request->profile->getClientOriginalName());
            
            
            // saving in the database
            $studentprofile->save();
            session()->flash('message','Data Uploaded Successfuly');
            $url = Storage::url("".$request->profile->getClientOriginalName());
            // $getFile = Storage::copy($url, '/'.$request->profile->getClientOriginalName());
            return redirect('/msys/student-profile/');
        }
        else
        {
            return '<h1>No file selected</h1>';
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        $studentprofile = StudentProfile::find($id);

        return view('student-profile.show',compact('studentprofile'));
        
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentprofile = StudentProfile::findORFail($id);
        return view('student-profile.edit',compact('studentprofile'));
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
            'student_name'  =>  'required|max:55|unique:student_profiles',
            'student_fatherName'  =>  'required|max:55|unique:student_profiles',
            'student_motherName'  =>  'required|max:55|unique:student_profiles',
            'student_mobileNumber'  =>  'required|regex:/(01)[0-9]{9}/',
            'student_email'  =>  'required|max:55|email|unique:student_profiles',
            'profile'  =>  'required|max:55|unique:student_profiles',
            'student_subject'  =>  'required|max:55|unique:student_profiles',
            'student_address'  =>  'required|max:191',
            ]);
        $studentprofile = StudentProfile::findORFail($id);
        $studentprofile->update(request(['student_name','student_fatherName','student_motherName','student_mobileNumber','student_email','student_subject','student_address']));
        session()->flash('message','Student Data is updated');
        return redirect('/msys/student-profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentProfile::destroy($id);
        session()->flash('message','Student data is deleted');
        return redirect('/msys/student-profile');
    }
}
