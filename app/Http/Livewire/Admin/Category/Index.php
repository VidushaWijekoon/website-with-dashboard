<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\Admin\Category;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $slug, $status, $category_id;

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
        $this->category_id = NULL;
    }

    public function storeCategory()
    {
        $validatedData = $this->validate();
        Category::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0'
        ]);

        session()->flash('message', 'Category Added Succeessfully');
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

    public function editCategory(int $category_id)
    {
        $this->category_id = $category_id;
        $category = Category::findOrFail($category_id);
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->status = $category->status;
    }

    public function updateCategory()
    {
        $validatedData = $this->validate();
        Category::findOrFail($this->category_id)->update([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0'
        ]);

        session()->flash('message', 'Category Updated');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function deleteCategory(int $category_id)
    {
        $this->category_id = $category_id;
    }

    public function destroyCategory()
    {
        Category::findOrFail($this->category_id)->delete();
        session()->flash('message', 'Category Deleted');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function render()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.category.index', ['categories' => $categories])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
