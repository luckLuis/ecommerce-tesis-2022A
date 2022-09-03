<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller
{
    //

    public string $token = 'Bearer 209|FSUFJNMDxzIeUKwo0L7EkDh59phsS5xtvlowTY7n';

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

        $product = Http::withToken('Bearer 209|FSUFJNMDxzIeUKwo0L7EkDh59phsS5xtvlowTY7n')->post('http://ecoshopepn.herokuapp.com/api/myPosts?',[   
            'name'=> $request->name,
            'slug'=> $slug,
            'description' => $request->description,
            'category_id'=>$request->category_id,
            'tags'=>$request->tag,
            'details'=>$request->details,
            'price'=>$request->price,
            
        ]);



        //return $product;

        return back()->with('status', 'Producto creado con éxito!');
    }


    public function show(Request $request)
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();

        $edit = Http::withToken($this->token)->get('http://ecoshopepn.herokuapp.com/api/myPosts/'.$request['id']);

        $editArray = $edit->json();

        $tags = Http::get('http://ecoshopepn.herokuapp.com/api/tag');
        $tagsArray = $tags->json();


        return view('logged.editPublication', compact('categoriesArray', 'editArray', 'tagsArray'));
    }

    public function edit(Request $request)
    {
        $slug = str_replace(' ', '-', $request->name);

        //return $this->id;

        

        $product = Http::withToken($this->token)->put('http://ecoshopepn.herokuapp.com/api/myPosts/40?',[
            'name'=> $request->name,
            'slug'=> $slug,
            'description' => $request->description,
            'category_id'=>$request->category_id,
            'tags'=>$request->tag,
            'details'=>$request->details,
            'price'=>$request->price,
        ]); 
    }

    
}