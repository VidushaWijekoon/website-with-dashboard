<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin.users.index', compact('users'));
    }

    public function edit_user(Request $request, int $user_id)
    {
        return view('Edit User');
    }

    public function destory_user(int $user_id)
    {
        $users = User::findOrFail($user_id);
        $users->delete();
        return redirect()->back()->with('message', 'User Been Deleted');
    }
}
