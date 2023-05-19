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

        return view('livewire.admin.employee.index');
    }
}
