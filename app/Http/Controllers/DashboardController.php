<?php


namespace App\Http\Controllers;


class DashboardController
{
    public function show() {
        $grades = \DB::table('grades')->get();
//        dd($grades);
            return view('dashboard', [
            'grades' => $grades
            ]);
        }
    }
