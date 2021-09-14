<?php

namespace App\Http\Controllers;

use App\Category;
use App\Cloth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    
    public function index()
    {
        return view('admin.shop.dashboard',[
            'clothes' => Cloth::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.shop.addcloth', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required|file|image|mimes:jpeg,jpg,png',
            'name' => 'required',
            'description' => 'required',
            'categories' => 'required',
            'amount' => 'required'
        ]);

        $imgFile = $request->file('image');
        $filename = time() .'.'.$imgFile->getClientOriginalName();

        $cloth = new Cloth();
        
        $cloth->image = $filename;
        $cloth->description = request('description');
        $cloth->name = request('name');
        $cloth->price = request('amount');
        $cloth->category_id = request('categories');

       
        $imgFile->move(public_path('\images'), $filename);

        $cloth->save();

        // $cloth->category()->attach(request('categories'));
        return redirect(route('admin.clothing'));
    }

    
}
