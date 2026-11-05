<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title2 = 'About Page';
        $list1 = 'Nama: Tiara';
        $list2 = 'Hobi: Menggambar';
        $list3 = 'Akun Github: AnsaMut2073';
        return view('admin.about', [
            'title2' => $title2,
            'list1' => $list1,
            'list2' => $list2,
            'list3' => $list3
        ]);
    }
}
