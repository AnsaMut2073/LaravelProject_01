<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title1 = 'Dashboard';
        $content = 'Selamat datang di halaman admin!';
        return view('admin.dashboard', [
            'title1' => $title1,
            'content' => $content
        ]);
    }
}
