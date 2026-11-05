<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // Pakai with('subject') biar bisa nampilin nama mapelnya
        $teachers = \App\Models\Teacher::with('subject')->get();
        return view('admin.teacher', compact('teachers'));
    }
}
