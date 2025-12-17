<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::orderBy('tid')->paginate(10);
        return view('teacher.index', compact("teacher"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = new Teacher();
        return view('teacher.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'gender' => 'required',
            'degree' => 'required',
            'tel' => 'required',
        ]);
        Teacher::create($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher created');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $tid)
    {
        $teacher = Teacher::findOrFail($tid);
        return view('teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $tid)
    {
        $teacher = Teacher::findOrFail($tid);
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $tid)
    {
        $teacher = Teacher::findOrFail($tid);
        $request->validate([
            'full_name' => 'required',
            'gender' => 'required',
            'degree' => 'required',
            'tel' => 'required',
        ]);
        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $tid)
    {
        $teacher = Teacher::findOrFail($tid);
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted');
    }
}
