<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Subject;

class TeacherController extends Controller
{
    public function index()
    {
        // Pakai with('subject') biar bisa nampilin nama mapelnya
        $teachers = Teacher::with('subject')->get();
        // Panggil semua data mapel buat dropdown di modal create teacher
        $subjects = Subject::all();
        return view('admin.teacher.index', compact('teachers', 'subjects'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:teachers,nip',
            'subject_id' => 'required|exists:subjects,id',
        ], [
            'name.required' => 'Nama guru wajib diisi.',
            'name.string' => 'Format nama guru tidak valid.',
            'name.max' => 'Nama guru maksimal 255 karakter.',
            'nip.required' => 'NIP wajib diisi.',
            'nip.string' => 'Format NIP tidak valid.',
            'nip.max' => 'NIP maksimal 20 karakter.',
            'nip.unique' => 'NIP sudah digunakan.',
            'subject_id.required' => 'Mata pelajaran wajib dipilih.',
            'subject_id.exists' => 'Mata pelajaran tidak ditemukan.',
        ]);

        Teacher::create($validated);

        return redirect()
            ->route('admin.teacher.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }
}
