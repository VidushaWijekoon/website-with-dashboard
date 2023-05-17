<?php

namespace App\Http\Livewire\Admin\Employee;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Admin\Employee;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $employee = Employee::orderBy('id', 'ASC')->paginate(15);
        return view('livewire.admin.employee.index', ['employee' => $employee]);
    }
}