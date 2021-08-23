<?php

namespace App\Http\Controllers;

use App\Category;
use App\Cloth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    
    public function index()
    {
        return view('admin.shop.dashboard');
    }

    public function create()
    {
        return view('admin.shop.addcloth', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        request()->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => 'required',
            // 'categories' => 'required',
            'amount' => 'required'
        ]);

        $cloth = new Cloth();
        
        $cloth->image = request('image');
        $cloth->description = request('description');
        $cloth->name = request('name');
        $cloth->price = request('amount');
        // $cloth->categories = request('categories');
        $cloth->save();

        $cloth->category()->attach(request('categories'));
        return redirect(route('admin.clothing'));
    }

    public function moveImage()
    {

    }

    
}
