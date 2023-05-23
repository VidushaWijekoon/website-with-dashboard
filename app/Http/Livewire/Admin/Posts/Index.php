<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts = Posts::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.posts.index', ['posts' => $posts]);
    }
}
