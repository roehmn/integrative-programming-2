<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // ✅ Store a new student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:students,email',
            'course'     => 'required|string|max:100',
            'year_level' => 'required|integer|min:1|max:5',
        ]);

        $student = Student::create($validated);

        return response()->json([
            'message' => 'Student added successfully!',
            'student' => $student
        ], 201);
    }

    // ✅ List all students
    public function index()
    {
        return response()->json(Student::all());
    }
}
