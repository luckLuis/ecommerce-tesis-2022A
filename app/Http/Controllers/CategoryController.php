<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index(){

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');


        $categoriesArray = $categories->json();

 
        return view('dashboard', compact('categoriesArray'));
    }


    public function header(){

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');

        $categoriesArray = $categories->json();

        $image = Http::get('https://ecoshopepn.herokuapp.com/api/imageProduct/4');
 
        return view('welcome', compact('categoriesArray', 'image'));
    }

    public function category(Request $request)
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');

        //$images = $productos->image->getUrl();

        $categoriesArray = $categories->json();
        //return $categories;
 
        return view('products-list', compact('categoriesArray'));
    }
}