<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DepartmentRequestForm;
use App\Models\Admin\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('pages.admin.departments.index');
    }

    public function create()
    {
        return view('pages.admin.departments.create');
    }

    public function store(DepartmentRequestForm $request)
    {
        $validatedData = $request->validated();
        $department = new Department();

        $department->department_name = $validatedData['department_name'];
        $department->department_slug = $validatedData['department_slug'];
        $department->status = $request->status == true ? '1' : 0;

        $department->save();
        return redirect(route('department.index'))->with('message', 'Department Added Successfully');
    }


    public function department_edit(Department $department)
    {
        return view('pages.admin.departments.edit', compact('department'));
    }

    public function update(DepartmentRequestForm $request, $department)
    {
        $validated = $request->validated();
        $department = Department::findOrFail($department);

        $department->department_name = $validated['department_name'];
        $department->department_slug = $validated['department_slug'];
        $department->status = $request->status == true ? '1' : 0;

        $department->update();
        return redirect(route('department.index'))->with('message', 'Department Updated Successfully');
    }

    public function delete($department)
    {
        $department = Department::findOrFail($department);

        $department->delete();
        session()->flash('message', 'Department has been deleted');
        return redirect()->back()->with('message', 'Department Been Deleted');
    }
}