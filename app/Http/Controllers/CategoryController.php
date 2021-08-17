<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view ('admin.category');
    }

    public function create(){
        return view('admin.addcategory');
    }

    public function store(Category $category)
    {
        $storeCat = Category::create(request()->validate([
            'category' => 'required|unique:categories'
        ]));

        if($storeCat){
            return redirect(route('admin.createCategory'))->with('message', 'Clothing category has been created');
        }

        return "404";
    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
