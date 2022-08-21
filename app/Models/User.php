<?php

namespace App\Models;

use App\Traits\HasImage;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasImage;


    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'personal_phone',
        'home_phone',
        'address',
        'password',
        'email',
        'birthdate',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // Relación de uno a muchos
    // Un usuario puede realizar muchas publicaciones
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    

    
    public function getFullName(){
        return "$this->first_name $this->last_name";
    }

    public function getBirthdateAttribute($value): ?string
    {
        return isset($value) ? Carbon::parse($value)->format('d/m/Y') : null;
    }


    public function generateAvatarUrl(): string
    {
        $ui_avatar_api = "https://ui-avatars.com/api/?name=*+*&size=128";

        return Str::replaceArray(
            '*',
            [
                $this->first_name,
                $this->last_name
            ],
            $ui_avatar_api
        );
    }

    public function updateUIAvatar(string $avatar_url)
    {
        $user_image = $this->image;

        $image_path = $user_image->path;

        if (Str::startsWith($image_path, 'https://'))
        {
            $user_image->path = $avatar_url;
            $user_image->save();
        }
    }



    //Relacion polimórfica uno a uno
    //Un usuario puede tener una imagen
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}