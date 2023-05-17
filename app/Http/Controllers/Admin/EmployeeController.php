<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Models\Admin\Employee;
use App\Models\Admin\Department;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmployeeFormRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('pages.admin.employees.index');
    }

    public function leave()
    {
        return view('pages.admin.employees.leaves');
    }

    public function holidays()
    {
        return view('pages.admin.employees.holidays');
    }

    public function attendance()
    {
        return view('pages.admin.employees.attendance');
    }

    public function create_employee()
    {
        $departments = Department::all();
        return view('pages.admin.employees.create_employee', compact('departments'));
    }

    public function store(EmployeeFormRequest $request)
    {
        $validate = $request->validated();
        $employee = new Employee();

        $employee->first_name = $validate['first_name'];
        $employee->last_name = $validate['last_name'];
        $employee->full_name = $validate['full_name'];
        $employee->email = $validate['email'];
        $employee->birthday = $validate['birthday'];
        $employee->gender = $validate['gender'];
        $employee->visa_type = $validate['visa_type'];
        $employee->visa_exipre_date = $validate['visa_exipre_date'];
        $employee->contact = $validate['contact'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/employee', $filename);
            $employee->image = $filename;
        }

        $employee->resident_country = $validate['resident_country'];
        $employee->current_address = $validate['current_address'];
        $employee->join_date = $validate['join_date'];
        $employee->special_note = $validate['special_note'];
        $employee->department = $validate['department'];

        $employee->save();
        return redirect(route('employee.dashboard'))->with('message', 'Employees Succuessfully Created');
    }

    public function edit_employee(Employee $employee)
    {
        $departments = Department::all();
        return view('pages.admin.employees.edit_employee', compact('departments', 'employee'));
    }

    public function update(EmployeeController $request, $employee)
    {
        $validate = $request->validated();
        $employee = Employee::findOrFail($employee);

        $employee->first_name = $validate['first_name'];
        $employee->last_name = $validate['last_name'];
        $employee->full_name = $validate['full_name'];
        $employee->email = $validate['email'];
        $employee->birthday = $validate['birthday'];
        $employee->gender = $validate['gender'];
        $employee->visa_type = $validate['visa_type'];
        $employee->visa_exipre_date = $validate['visa_exipre_date'];
        $employee->contact = $validate['contact'];

        if ($request->hasFile('image')) {

            $path = 'uploads/employee/' . $employee->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/employee', $filename);
            $employee->image = $filename;
        }

        $employee->resident_country = $validate['resident_country'];
        $employee->current_address = $validate['current_address'];
        $employee->join_date = $validate['join_date'];
        $employee->special_note = $validate['special_note'];
        $employee->department = $validate['department'];

        $employee->update();
        return redirect(route('employee.dashboard'))->with('message', 'Employees Succuessfully Updated');
    }

    public function delete($employee)
    {
        $employee = employee::findOrFail($employee);

        $employee->delete();
        session()->flash('message', 'Employee has been deleted');
        return redirect()->back()->with('message', 'Employee Been Deleted');
    }
}