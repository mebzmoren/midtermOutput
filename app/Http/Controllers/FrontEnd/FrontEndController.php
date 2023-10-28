<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PostFormRequest;

class FrontEndController extends Controller
{
    public function index()
    {
        $latest_posts = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->take(6);
        $post = Post::where('status', '0')->orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.index', compact('latest_posts', 'post'));
    }

    public function about()
    {

        $all_categories = Category::where('status', '0')->get();
        return view('frontend.about', compact('all_categories'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function categories()
    {
        $categories = Category::where('status', '0')->get();
        return view('frontend.categories', compact('categories'));
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function viewCategoryPost(Request $request, $category_name)
    {
        $category = Category::where('name', $category_name)->where('status', '0')->first();
        if ($category) {
            // $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(1);
            $search = $request['search'] ?? "";
            $cate_name = $category_name;
            $cate_description =  $category->description;
            if ($search != "") {
                $post = Post::where('category_id', $category->id)->where('name', 'LIKE', "%$search%")->where('status', '0')->orderBy('created_at', 'DESC')->paginate(8);
            } else {
                $post = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->paginate(8);
            }
            return view('frontend.post.index', compact('post', 'category', 'search', 'cate_name', 'cate_description'));
        } else {
            return view('frontend.index');
        }
    }

    public function viewPost(string $category_name, string $post_name)
    {
        $latest_posts = Post::where('status', '0')->orderBy('created_at', 'DESC')->get()->take(6);
        $category = Category::where('name', $category_name)->where('status', '0')->first();
        if ($category) {
            $post = Post::where('category_id', $category->id)->where('name', $post_name)->where('status', '0')->first();
            $cate_name = $category_name;
            $post_name = $post_name;
            // $latest_posts = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->get();
            return view('frontend.post.view', compact('post', 'latest_posts', 'cate_name', 'post_name'));
        } else {
            return view('frontend.index');
        }
    }

    public function create()
    {
        $category = Category::where('status', '0')->get();
        return view('frontend.post.create', compact('category'));
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

        return redirect()->back()->with('message', 'Post Added Succesfully');
    }
}
