<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    //relacion de uno a muchos
//Una categoría puede tener muchos productos
    public function products(){
        return $this ->hasMany(Product::class);
    }
}