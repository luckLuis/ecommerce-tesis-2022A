<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarController extends Controller
{
    //

    public string $token = 'Bearer 192|KRtabJ9ZpBJPJ4JvQuhPI1LPuz6JI875Gy88pVu9';

    public function index()
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();


        $cart = Http::withToken($this->token)->get('https://ecoshopepn.herokuapp.com/api/myCar');

        $cartArray = $cart -> json();


        //Mostrar imágenes de cada producto del carrito
            
        foreach ($cartArray as $producto){
            $images[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        }

        $bool = true;


        //Comprobar si el carrito de compras está vacío

        if(empty($cartArray))
        {
            $images['451'] = strval ('https://picsum.photos/id/26/200/300');

            $bool = false;
        }

        $price = 0;

        $items = 0;

        foreach ($cartArray as $cart)
        {
            $price = $cart['price'] + $price;
            $items = $items + 1;
        }

        return view('logged.shoppingCart', compact('categoriesArray', 'cartArray', 'images', 'price', 'items', 'bool'));
    }

    public function add(Request $producto)
    {
        $add = Http::withToken($this->token)->get('https://ecoshopepn.herokuapp.com/api/add/'.$producto['id']);

        //return $add;

        return back()->with('status', $add['message']);
    }

    public function discard(Request $producto)
    {
        $discard = Http::withToken($this->token)->get('https://ecoshopepn.herokuapp.com/api/myCar/discard/'.$producto['id']);

        return back()->with('status', $discard['message']);
    }


    public function reserve(Request $producto)
    {
        $reserve = Http::withToken($this->token)->get('http://ecoshopepn.herokuapp.com/api/myCar/reserve/'.$producto['id']);

        $list = Http::withToken($this->token)->get('http://ecoshopepn.herokuapp.com/api/history');

        $listArray = $list->json();

        
        foreach ($listArray['Reserve'] as $producto){
            $images[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        } 

        foreach ($listArray['Reserve'] as $producto){
            $contact[$producto['id']] = json_decode (HTTP::get('https://ecoshopepn.herokuapp.com/api/contact/'.$producto['user_id']));
        } 

        return back()->with('status', $reserve['message']);
    }

    public function listReserve()
    {

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();

        $list = Http::withToken($this->token)->get('http://ecoshopepn.herokuapp.com/api/history');

        $listArray = $list->json();

        foreach ($listArray['Reserve'] as $producto){
            $images[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        } 

        foreach ($listArray['Reserve'] as $producto){
            $contact[$producto['id']] = json_decode (HTTP::get('https://ecoshopepn.herokuapp.com/api/contact/'.$producto['user_id']));
        } 

        return view('logged.sellComplete', compact('listArray', 'categoriesArray', 'images', 'contact'));
    }

    public function buy(Request $request)
    {
        $buy = Http::withToken($this->token)->get('https://ecoshopepn.herokuapp.com/api/purchase/'. $request['id']);

        return back()->with('status', $buy['message']);
    }

    public function reserveList()
    {
        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');  
        $categoriesArray = $categories->json();
 
        $list = Http::withToken($this->token)->get('http://ecoshopepn.herokuapp.com/api/history');

        $listArray = $list->json();

        foreach ($listArray['Reserve'] as $producto){
            $images[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        }

        foreach ($listArray['Purchased Products'] as $producto){
            $images2[$producto['id']] = strval (HTTP::get('https://ecoshopepn.herokuapp.com/api/imageProduct/'.$producto['id']));
        }

        foreach ($listArray['Reserve'] as $producto){
            $contact[$producto['id']] = json_decode (HTTP::get('https://ecoshopepn.herokuapp.com/api/contact/'.$producto['user_id']));
        } 

        foreach ($listArray['Purchased Products'] as $producto){
            $contact2[$producto['id']] = json_decode (HTTP::get('https://ecoshopepn.herokuapp.com/api/contact/'.$producto['user_id']));
        }

        $vacio = true;

        $emptyReserve = true;

        if (empty($listArray['Purchased Products']))
        {
            $vacio = false;
        }

        if (empty($listArray['Reserve']))
        {
            $emptyReserve = false;
        }

        return view('profile.notifications', compact('categoriesArray', 'listArray', 'images', 'contact', 'contact2', 'vacio', 'emptyReserve', 'images2'));
    }
}