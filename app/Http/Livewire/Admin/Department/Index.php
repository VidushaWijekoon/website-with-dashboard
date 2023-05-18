<?php

namespace App\Http\Livewire\Admin\Department;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\Admin\Department;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $slug, $status, $department_id;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'slug' => 'required|string',
            'status' => 'nullable'
        ];
    }

    public function resetInput()
    {
        $this->name = NULL;
        $this->slug = NULL;
        $this->status = NULL;
        $this->department_id = NULL;
    }

    public function storeDepartment()
    {
        $validatedData = $this->validate();
        Department::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0'
        ]);

        session()->flash('message', 'New Department has been created');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function editDepartment(int $department_id)
    {
        $this->department_id = $department_id;
        $department = department::findOrFail($department_id);
        $this->name = $department->name;
        $this->slug = $department->slug;
        $this->status = $department->status;
    }

    public function updateDepartment()
    {
        $validatedData = $this->validate();
        Department::findOrFail($this->department_id)->update([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0'
        ]);

        session()->flash('message', 'Department Updated');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteDepartment(int $department_id)
    {
        $this->department_id = $department_id;
    }

    public function destroyDepartment()
    {
        Department::findOrFail($this->department_id)->delete();
        session()->flash('message', 'Department Deleted');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $departments = Department::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.department.index', ['departments' => $departments])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
