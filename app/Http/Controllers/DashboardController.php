<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class DashboardController extends Controller
{
    public function show() {
        $grades = \DB::table('grades')->get();
        $assignments = \DB::table('assignments')->get();
        $courses = Course::all();
            return view('dashboard', [
//            'grades' => $grades,
//            'assignments' => $assignments,
            'courses' => $courses
            ]);
        }
    }
