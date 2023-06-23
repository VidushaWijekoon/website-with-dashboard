<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $user_id = Auth::user()->id;
        $posts = Posts::where('created_by', $user_id)->orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.posts.index', ['posts' => $posts]);
    }
}
