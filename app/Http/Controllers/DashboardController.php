<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lecture;
use App\Assignment;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        
        if(\Auth::user()->role == '1' )
        {
            return view('app.dashboard.student');
        }


        if(\Auth::user()->role == '2' )
        {
           
            $lectures = Lecture::with('course')->where('due_date',Carbon::today())->get();
            $assignments = Assignment::with('course')->where('due_date',Carbon::today())->get();
            return view('app.dashboard.faculty')->with(['lectures'=>$lectures,'assignments'=>$assignments]);
        }
    }
}
