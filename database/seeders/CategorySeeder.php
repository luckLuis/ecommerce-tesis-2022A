<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        $categories = ['men', 'women', 'boy', 'girl', 'baby'];
        //$slug = 'prueba';

        for($i=0; $i<5; $i++){
            Category::create([
            'name'=>$categories[$i],
            //'slug'=>$slug,
            ]);
        }
    }
}