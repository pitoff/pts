<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    
    public function index()
    {
        return view('admin.dashboard');
    }

    public function create()
    {
        return view('admin.addcloth');
    }

    
}
