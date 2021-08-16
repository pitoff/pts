<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{

    public function create()
    {
        return view('home.register');
    }

    public function login()
    {
        return view('home.login');
    }

    public function createLogin(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
           if(Auth::user()->isAdmin()){

                return redirect(route('admin.dashboard'));

           }elseif(Auth::user()->isUser()){
               
                return redirect(route('shop.index'));

           }
        }

        return redirect(route('home.login'))->with("Invalid params were provided");
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
        $data = $request->all();
        $create = $this->createData($data);

        if(!$create){
            return "Error 404";
        }
        return redirect(route('home.login'))->with('reg ok!');
    }

    protected function createData(array $data)
    {
        return User::create([
            'role' => 2,
            'name' => $data['name'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('home.login'));

    }
}
