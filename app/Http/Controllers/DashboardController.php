<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
class DashboardController extends Controller
{
    public function index()
    {
        $data = Question::all();
        return view('dashboard.ujian',['data'=>$data]);
    }
}
