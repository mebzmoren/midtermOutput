<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function categories()
    {
        return view('categories');
    }

    public function faq()
    {
        return view('faq');
    }

    public function dashboard()
    {
        $posts = Post::all();
        $category = Category::all();
        return view('admin.dashboard', compact('posts', 'category'));
    }

    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $category = Category::where('status', '0')->get();
        return view('admin.post.create', compact('category'));
    }

    public function store(PostFormRequest $request)
    {
        $data = $request->validated();

        $post = new Post;
        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->description = $data['description'];
        $post->status = $request['status'] == true ? '1' : '0';
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect('admin/posts')->with('message', 'Post Added Succesfully');
    }

    public function edit($post_id)
    {
        $category = Category::where('status', '0')->get();
        $post = Post::find($post_id);
        return view('admin.post.edit', compact('post', 'category'));
    }

    public function update(PostFormRequest $request, $post_id)
    {
        $data = $request->validated();

        $post = Post::find($post_id);
        $post->category_id = $data['category_id'];
        $post->name = $data['name'];
        $post->description = $data['description'];
        $post->status = $request['status'] == true ? '1' : '0';
        $post->created_by = Auth::user()->id;
        $post->update();

        return redirect('admin/posts')->with('message', 'Post Updated Succesfully');
    }

    public function delete($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('admin/posts')->with('message', 'Post Deleted Succesfully');
    }
}
