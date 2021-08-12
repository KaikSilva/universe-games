<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;

class UserController extends Controller
{
    public function viewUser(User $user)
    {
        $posts = Post::where('author' , $user->id)->orderBy('created_at' , 'DESC')->get();
        return view('admin.users.viewUser', [
            'Author' => $user,
            'user' => Auth::user(),
            'posts' => $posts
        ]);
    }

    public function viewUserAll()
    {
        $users = User::orderBy('created_at' , 'ASC')->get();
        return view('admin.users.viewUserAll', [
            'users' => $users,
            'user' => Auth::user()
        ]);
    }

    public function EditUser(User $user)
    {
        return view('admin.users.editUser', [
            'Author' => $user,
            'user' => Auth::user()
        ]);
    }
}
