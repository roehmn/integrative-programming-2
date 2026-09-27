<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all departments with their related employees
        $departments = Department::with('employees')->get();

        return response()->json([
            'status' => 'success',
            'data'   => $departments
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request payload
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name'
        ]);

        $department = Department::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Department created successfully',
            'data'    => $department
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        // Load employees relation for a single department
        $department->load('employees');

        return response()->json([
            'status' => 'success',
            'data'   => $department
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name,' . $department->id
        ]);

        $department->update($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Department updated successfully',
            'data'    => $department
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Department deleted successfully'
        ], 200);
    }
}