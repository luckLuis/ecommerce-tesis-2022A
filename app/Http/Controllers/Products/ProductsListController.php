<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductsListController extends Controller
{
    //
    public function index(Request $request){
              
        $productos = HTTP::get('http://ecoshopepn.herokuapp.com/api/category/'.$request['id']);
        $productosArray = $productos->json();

        //return $productosArray;

        //Mostrar imágenes de cada producto
            
        foreach ($productosArray['Products'] as $producto){
            $images[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        } 

        //Mostrar usuarios de cada producto

        foreach ($productosArray['Products'] as $producto){
            $users[$producto['user_id']] = strval (HTTP::get('http://ecoshopepn.herokuapp.com/api/nick/'.$producto['user_id']));
        }

        //return $users[1];

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();
            
        //return  $productosArray;

        return view('products-list', compact('productosArray', 'productos', 'images', 'categoriesArray', 'users'));
    }
        

    public function show()
    {
        return view('products.show');
    }

    public function oneProduct(Request $product)
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');
    
        $categoriesArray = $categories->json();

        //return $product['id'];

        $producto = HTTP::get('http://ecoshopepn.herokuapp.com/api/products/' .$product['id']);
            
        $productoArray = $producto->json();

            
        foreach ($productoArray["Similar products"] as $producto){
            $images[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        } 


        $image = HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$product['id']);
          
        //return $productoArray;

        //Mostrar usuarios de cada producto

    foreach ($productoArray["Similar products"] as $producto) {
        $users[$producto['user_id']] = strval(Http::get('http://ecoshopepn.herokuapp.com/api/nick/'.$producto['user_id']));
    }

    
        $users[$productoArray['Product']['user_id']] = strval(HTTP::get('http://ecoshopepn.herokuapp.com/api/nick/'.$productoArray['Product']['user_id']));
    
        //return $users;

        return view('products.show', compact('productoArray', 'image', 'categoriesArray', 'images', 'users'));
    }

    public function userProduct(Request $user)
    {

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');
    
        $categoriesArray = $categories->json();

        $users = HTTP::get('http://ecoshopepn.herokuapp.com/api/profile/'.$user['name']);

        $usersArray = $users->json();
 
        return view('products.product', compact('usersArray', 'categoriesArray'));
    }

    public function imagesProducts(Request $product){
        $image = HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$product['id']);
        return view('products.show', compact('image'));
    }


}