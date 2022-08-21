<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
{
    //
    public function index()
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();


        $cartArray = Http::withToken('25|rXiF182CMSJwAi2CzpDXEAyimg0PXUBSUD8V1bgL')->get('https://ecoshopepn.herokuapp.com/api/myCar');

        

        return view('logged.shoppingCart', compact('categoriesArray', 'cartArray'));
    }

    public function add(Request $producto)
    {
        //return $producto['id'];

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();

        $add = Http::withToken('25|rXiF182CMSJwAi2CzpDXEAyimg0PXUBSUD8V1bgL')->get('https://ecoshopepn.herokuapp.com/api/add/'.$producto['id']);

        $cartArray = Http::withToken('25|rXiF182CMSJwAi2CzpDXEAyimg0PXUBSUD8V1bgL')->get('https://ecoshopepn.herokuapp.com/api/myCar');

        

        return view('logged.shoppingCart', compact('categoriesArray', 'cartArray'));
    }
}