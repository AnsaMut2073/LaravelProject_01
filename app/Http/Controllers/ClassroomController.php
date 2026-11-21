<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        return view('admin.classroom.index', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classrooms,name',
            'major' => 'required|string|max:100',
        ], [
            'name.required' => 'Nama kelas wajib diisi.',
            'name.string' => 'Format nama kelas tidak valid.',
            'name.max' => 'Nama kelas maksimal 255 karakter.',
            'name.unique' => 'Nama kelas sudah ada.',
            'major.required' => 'Jurusan wajib diisi.',
            'major.string' => 'Format jurusan tidak valid.',
            'major.max' => 'Jurusan maksimal 100 karakter.',
        ]);

        // Simpan ke database
        Classroom::create($validated);

        // Balikin ke halaman tabel dengan pesan sukses
        return redirect()
            ->route('admin.classroom.index')
            ->with('success', 'Data kelas berhasil ditambahkan.');
    }
}
