<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyProductsController extends Controller
{
    //

    public string $token = 'Bearer 192|KRtabJ9ZpBJPJ4JvQuhPI1LPuz6JI875Gy88pVu9';

    public function index()
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();


        $myProducts = Http::withToken('185|MJjLMVcxy1bPOvA9MaRlm6pFTBsH41jgg40DpNq6')->get('http://ecoshopepn.herokuapp.com/api/myPosts');
        
        $myProductsArray = $myProducts->json();

        //return $myProductsArray;
        
        //Mostrar imágenes de cada producto
            
        foreach ($myProductsArray as $producto){
            $images[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        }  

        //return HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/35');
        

        return view('logged.myPublications', compact('categoriesArray', 'myProductsArray', 'images'));
    }

    public function delete(Request $producto)
    {
        $delete = Http::withToken($this->token)->delete('http://ecoshopepn.herokuapp.com/api/myPosts/'.$producto['id']);

        return back()->with('status', $delete['message']);
    }

}