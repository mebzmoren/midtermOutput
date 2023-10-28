<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $data = $request->validated();

        $category = new Category;
        $category->name = $data['name'];
        $category->description = $data['description'];

        $uploadPath = 'uploads/category/';
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' .  $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $category->image = $uploadPath . $filename;
        }

        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/category')->with('message', 'Category Added Successfully');
    }

    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category_id)
    {
        $data = $request->validated();

        $category = Category::find($category_id);
        $category->name = $data['name'];
        $category->description = $data['description'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/category/' . $category->image;
            if (File::exists($destination)) {
                File::delete();
            }

            $uploadPath = 'uploads/category/';
            $file = $request->file('image');
            $filename = time() . '.' .  $file->getClientOriginalExtension();
            $file->move('uploads/category/', $filename);
            $category->image = $uploadPath . $filename;
        }

        $category->navbar_status = $request->navbar_status == true ? '1' : '0';
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/category')->with('message', 'Category Update Successfully');
    }

    public function delete($category_id)
    {
        $category = Category::find($category_id);
        if ($category) {

            $destination = 'uploads/category/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $category->posts()->delete();
            $category->delete();

            return redirect('admin/category')->with('message', 'Category w/ Posts Deleted Successfully');
        } else {
            return redirect('admin/category')->with('message', 'Category Id not Found');
        }
    }
}
