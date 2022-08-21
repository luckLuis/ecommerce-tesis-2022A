<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    use HasFactory;

    protected $fillable = ['name', /*'slug',*/'details', 'price','description'];

    // Relación de uno a muchos
    // Un producto le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación de uno a muchos
    // Un producto le pertenece a una categoría

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación polimórfica uno a uno
    // Un producto puede tener una imagen
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }

}