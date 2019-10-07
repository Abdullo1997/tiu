<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_student=Student::count();
        $count_teacher=Teacher::count();
        // dd($count);
        return view('frontend.index',['count_student'=>$count_student,'count_teacher'=>$count_teacher]);
    }
}
