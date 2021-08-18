<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        if(Auth::user()->isAdmin()){
            $categories = Category::all();
            return view ('admin.category.category', [
                'categories' => $categories
            ]);
        }else{
            abort('404');
        }
        
    }

    public function create()
    {
        if(Auth::user()->isAdmin()){
            return view('admin.category.add');
        }else{
            abort('404');
        }
        
    }

    public function store(Category $category)
    {
        $storeCat = Category::create(request()->validate([
            'category' => 'required|unique:categories'
        ]));

        if($storeCat){
            return redirect(route('admin.category'))->with('message', 'Clothing category has been created');
        }else{
            abort('404');
        }
   
    }

    public function show(Category $category)
    {
        return view('admin.category.show', [
            'category' => $category
        ]);
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Category $category)
    {
        request()->validate([
            'category' => 'required'
        ]);

        $category->category = request('category');

        $category->update();
        return redirect(route('admin.category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        
        return redirect(route('admin.category'));
       
    }
}
