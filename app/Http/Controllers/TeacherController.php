<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Student;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Student $student)
    {
        $teachers = Teacher::all();
        return view('frontend.teachers.index', [
            'teachers' => $teachers,
            'student'=>$student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.teachers.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'phone_number'=>'required',
        ]);
        $teacher = new Teacher();
        $teacher->firstname=$request->firstname;
        $teacher->lastname=$request->lastname;
        $teacher->phone_number=$request->phone_number;
        $teacher->save();

        return redirect()->route('teachers.index')->with('message','Teacher has been created successfully!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {

        return view('frontend.teachers.show',compact('teacher'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('frontend.teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
      $request->validate([
          'firstname'=>'required',
          'lastname'=>'required',
          'phone_number'=>'required',
      ]);
      $teacher->firstname=$request->firstname;
      $teacher->lastname=$request->lastname;
      $teacher->phone_number=$request->phone_number;
      $teacher->save();

      return redirect()->route('teachers.index')->with(['success-message','Teacher has been uploads successfully!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
      $teacher->delete();
      return redirect()->back();

    }
    public function student(Request $request, Teacher $teacher)
    {
      
        $students =Student::where('teacher_id',$teacher->id)->paginate(10);
        $search=$request->input('search');
        return view('frontend.students.index',['students'=>$students,'search' => $search]);
    }
    public function del(Student $student)
    {
        $student->delete();
        return redirect()->back(); 
    }
}
