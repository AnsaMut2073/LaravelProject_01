<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = \App\Models\Subject::all();
        return view('admin.subject', compact('subjects'));
    }
}
