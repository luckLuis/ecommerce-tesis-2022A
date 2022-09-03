<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules;

class RegisterUserController extends Controller
{
    
    public function create()
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();


        return view('auth.register', compact('categoriesArray'));
    }


    public function store(Request $request)
    {


        $request->validate([

            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'personal_phone' => ['required', 'string', 'max:10'],
            'home_phone' => ['required', 'string', 'max:9'],
            'address' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        $user = Http::post('http://ecoshopepn.herokuapp.com/api/register?',[
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'personal_phone' => $request->personal_phone,
            'home_phone' => $request->home_phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation
        ]);

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();

        return back()->with('status', $user['message']);

        //return view('welcome', compact('categoriesArray'));
    }

    public function destroy(Request $request)
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();


        return view('welcome', compact('categoriesArray'));
    }
}