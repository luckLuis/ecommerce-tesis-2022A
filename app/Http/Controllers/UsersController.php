<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function index(){
        $users = HTTP::get('http://ecoshopepn.herokuapp.com/api/profile/4');

        //$images = $productos->image->getUrl();

        $usersArray = $users->json();

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();

        return view('visitor-stats', compact('usersArray', 'categoriesArray'));
    }


    public function user(Request $user)
        {
            $users = HTTP::get('http://ecoshopepn.herokuapp.com/api/profile/'.$user['name']);

            $avatar = HTTP::get('https://ecoshopepn.herokuapp.com/api/showAvatar/'.$user['name']);

            $usersArray = $users->json();
            
            $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
            $categoriesArray = $categories->json();
 
            return view('visitor-stats', compact('usersArray', 'avatar', 'categoriesArray'));
        }


        


    public function getFullName($request)
    {
        $users = HTTP::get('http://ecoshopepn.herokuapp.com/api/users');

        $usersArray = $users->json();


    }
}