<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search=$request->input('search');
        $students = Student::latest()->paginate(10);
        return view('frontend.students.index', [
            'students' => $students,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($teacher_id = null)
    {
        if(!$teacher_id){
            $model=Teacher::get();
        }
        return view('frontend.students.create',['teacher_id'=>$teacher_id,'model'=>$model]);
    }
    public function search(Request $request)
    {
        $search=$request->input('search');
        if(empty($search)){
            return redirect()->route('students.index');
        }
        $stu=Student::where('name','like','%'.$search.'%')->paginate(50);
        return view('frontend.students.index',[
            'students' => $stu,
            'search' => $search
            ]);

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
            'otm' => 'required|string',
            'teacher_id'=>'required',
            'name_of_faculty'=>'required|string',
            'diraction_name'=>'required|string',
            'group_number'=>'required|string',
            'level'=>'required',
            'shir'=>'required',
            'name'=>'required|string',
            'surname'=>'required|string',
            'father_name'=>'required|string',
            'be_born_year'=>'required|string',
            'place_of_residence'=>'required|string',
            'residence_address'=>'required|string',
            'student_phone_number'=>'required|string',
            'parent_home_address'=>'required|string',
            'father_f_i_o'=>'required|string',
            'mather_f_i_o'=>'required|string',
            'education_type'=>'required|string',
            'nationality' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:10240'
        ]);

        $student = new Student();
        $student->otm = $request->otm;
        $student->teacher_id =$request->get('teacher_id');
        $student->name_of_faculty = $request->name_of_faculty;
        $student->diraction_name = $request->diraction_name;
        $student->group_number = $request->group_number;
        $student->level = $request->level;
        $student->shir = $request->shir;
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->father_name = $request->father_name;
        $student->be_born_year = $request->be_born_year;
        $student->place_of_residence = $request->place_of_residence;
        $student->residence_address = $request->residence_address;
        $student->place_of_residence = $request->place_of_residence;
        $student->student_phone_number = $request->student_phone_number;
        $student->parent_home_address = $request->parent_home_address;
        $student->father_f_i_o = $request->father_f_i_o;
        $student->nation = $request->get('nationality');
        $student->mather_f_i_o = $request->mather_f_i_o;
        $student->education_type = $request->education_type;
        $student->image = $request->file('image')->store('imageFolder', 'public');
        $student->save();

        foreach($request->file('image') as $file){
            $student_image->filename = $file->store('imageFolder', 'public');
            $student_image->student_id = $student->id;
        }

        return redirect()->route('students.index')->with('message', 'Student has been created successfully!');
    }
    /**

     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('frontend.students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $teacher_id=Teacher::all();
        return view('frontend.students.edit',compact('student','teacher_id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'otm' => 'required|string',
            'teacher_id'=>'required',
            'name_of_faculty'=>'required|string',
            'diraction_name'=>'required|string',
            'group_number'=>'required|string',
            'level'=>'required',
            'shir'=>'required',
            'name'=>'required|string',
            'surname'=>'required|string',
            'father_name'=>'required|string',
            'be_born_year'=>'required|string',
            'place_of_residence'=>'required|string',
            'residence_address'=>'required|string',
            'student_phone_number'=>'required|string',
            'parent_home_address'=>'required|string',
            'father_f_i_o'=>'required|string',
            'mather_f_i_o'=>'required|string',
            'education_type'=>'required|string',
            'nationality' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:10240'
        ]);

        $student->otm = $request->otm;
        $student->teacher_id =$request->get('teacher_id');
        $student->name_of_faculty = $request->name_of_faculty;
        $student->diraction_name = $request->diraction_name;
        $student->group_number = $request->group_number;
        $student->level = $request->level;
        $student->shir = $request->shir;
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->father_name = $request->father_name;
        $student->be_born_year = $request->be_born_year;
        $student->place_of_residence = $request->place_of_residence;
        $student->residence_address = $request->residence_address;
        $student->place_of_residence = $request->place_of_residence;
        $student->student_phone_number = $request->student_phone_number;
        $student->parent_home_address = $request->parent_home_address;
        $student->father_f_i_o = $request->father_f_i_o;
        $student->nation = $request->get('nationality');
        $student->mather_f_i_o = $request->mather_f_i_o;
        $student->education_type = $request->education_type;
        if ($request->file('image')){
            $student->image = $request->file('image')->store('imageFolder', 'public');
        }
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back();
    }
}
