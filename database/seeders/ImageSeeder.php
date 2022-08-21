<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{

    public function run()
    {
        $users = User::all();

        $users->each(function ($user)
        {
            $user->image()->create([
                'path' => "https://ui-avatars.com/api/?name=$user->first_name+$user->last_name&size=128"
            ]);
        });


        $products = Product::all();
        
        $products->each(function ($product) {
            $product->image()->create([
                'path' => "https://picsum.photos/id/$product->id/200/300"
            ]);
        });
    }
}