<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = \App\Models\Subject::all();
        return view('admin.subject.index', compact('subjects'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
        ], [
            'name.required' => 'Nama mapel wajib diisi.',
            'name.string' => 'Format nama mapel tidak valid.',
            'name.max' => 'Nama mapel maksimal 255 karakter.',
            'name.unique' => 'Nama mapel sudah ada.',
        ]);

        Subject::create($validated);

        return redirect()
            ->route('admin.subject.index')
            ->with('success', 'Data mapel berhasil ditambahkan.');
    }
}
