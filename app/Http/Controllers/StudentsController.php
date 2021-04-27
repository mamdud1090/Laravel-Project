<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('students_info')->insert([

            'student_name'=> $request->student_name,
            'course_name'=> $request->course_name,
            'fee' => $request->fee

            ]);

        return back()->with('info_add','Info added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        $students = DB::table('students_info')->get();
        return view('info-list', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = DB::table('students_info')->where('id', $id )->first();
        return view('edit-info', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('students_info')->where('id', $request->id)->update([

            'student_name'=> $request->student_name,
            'course_name'=> $request->course_name,
            'fee' => $request->fee
            ]);

        return back()->with('info_update','Information Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students_info')->where('id', $id)->delete();
        return back()->with('info_delete','Information Deleted Successfully');
    }
}
