<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        return view('auth.selection');
    }
    public function PagSite()
    {
     
        return view('web.index');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
