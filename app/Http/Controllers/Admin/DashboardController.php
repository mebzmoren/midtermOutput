<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $category = Category::all();
        $users = User::all();

        $category_count = Category::count();
        $post_count = Post::count();
        $user_count = User::where('role_as', '0')->count();
        $admin_count = User::where('role_as', '1')->count();
        return view('admin.dashboard', compact('posts', 'category', 'users', 'category_count', 'post_count', 'user_count', 'admin_count'));
    }
}
