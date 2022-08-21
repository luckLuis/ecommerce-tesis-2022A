<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    //

    public function index()
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();


        $tags = Http::get('http://ecoshopepn.herokuapp.com/api/tag');
        $tagsArray = $tags->json();

        return view('logged.sell', compact('categoriesArray', 'tagsArray'));
    }

    public function store(Request $request)
    {

        $slug = str_replace(' ', '-', $request->name);


        

        //return $request;

        $product = Http::withToken('Bearer 149|nOzp8eUWfuhmDHCwfnmMQIwTwJDnuDvREUTKCVtq')->post('http://ecoshopepn.herokuapp.com/api/myPosts?',[   
            'name'=> $request->name,
            'slug'=> $slug,
            'description' => $request->description,
            'category_id'=>$request->category_id,
            'tags'=>$request->tag,
            'details'=>$request->details,
            'price'=>$request->price,
        ]);

        //return $product;

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();

        return back()->with('status', 'Producto creado con éxito');

        return view('welcome', compact('categoriesArray'));
    }
}