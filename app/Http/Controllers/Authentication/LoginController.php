<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules;

use GuzzleHttp\Client;

class LoginController extends Controller
{
    //
 
    private string  $token = 'Bearer ';

    public function create()
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();

        return view('auth.login', compact('categoriesArray'));
    }

    public function login(Request $request)
    {
        $user = Http::post('http://ecoshopepn.herokuapp.com/api/login?',[
            'login_field' => $request->login_field,
            'password' => $request->password,
        ]);


        $token = $user['token'];

        //$this -> user = $user['token'];

        $userArray = $user->json();   
        
        $user = $userArray['user'];

        //return $userArray;

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');


        $categoriesArray = $categories->json();

        //return redirect('/', compact('token'));

        return view('profile.show', compact('categoriesArray', 'token', 'user'));
    }

    public function logout(){

        
    //return $this->token;

    $response = Http::withToken('Bearer 89|x0nqtKQiaOFA09waV5hBMb7yHnMeNoze82XKoKEz')->post('http://ecoshopepn.herokuapp.com/api/logout');

    $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
    $categoriesArray = $categories->json();

    return view('auth.login', compact('categoriesArray'));
    }

}