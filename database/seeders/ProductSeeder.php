<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run()
    {


/*
        $users = User::where('id', 3)->get();
        // dd($users_guards);
        // dd(count($users_guards));
        $products=Product::all();
        // Los guardias pueden estar en varios pabellones
        $products->each(function($products) use ($users)
        {
            $produts->users()->attach($users_guards->shift(2));
        });

    */


        $category_men = Category::where('name', 'men')->first();
        //dd($category_men);
        // 5 productos que le pertenecen a la categoría Hombre
        Product::factory()->for($category_men)->count(5)->create();


        $category_women = Category::where('name', 'women')->first();
        // productos que le pertenecen a la categoría Mujer
        Product::factory()->for($category_women)->count(5)->create();


        $category_boy = Category::where('name', 'boy')->first();
        // 5 usuarios que le pertenecen al rol guard
        Product::factory()->for($category_boy)->count(5)->create();


        $category_girl = Category::where('name', 'girl')->first();
        // 5 usuarios que le pertenecen al rol prisoner
        Product::factory()->for($category_girl)->count(5)->create();

        
        $category_baby = Category::where('name', 'baby')->first();
        // 5 usuarios que le pertenecen al rol prisoner
        Product::factory()->for($category_baby)->count(5)->create();

        
    }
}