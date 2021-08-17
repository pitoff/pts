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
            return view ('admin.category', [
                'categories' => $categories
            ]);
        }else{
            abort('404');
        }
        
    }

    public function create()
    {
        if(Auth::user()->isAdmin()){
            return view('admin.addcategory');
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
            return redirect(route('admin.createCategory'))->with('message', 'Clothing category has been created');
        }else{
            abort('404');
        }
   
    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
