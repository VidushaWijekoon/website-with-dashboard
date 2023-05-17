<?php

namespace App\Http\Livewire\Admin\Department;

use App\Models\Admin\Department;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $departments = Department::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.department.index', ['departments' => $departments]);
    }
}