<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileAvatarController extends Controller
{

    public string $token = 'Bearer';

    public function update(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:512']
        ]);

        
      
       

        $response = Http::withToken('Bearer 192|KRtabJ9ZpBJPJ4JvQuhPI1LPuz6JI875Gy88pVu9')->attach('image', file_get_contents($request->file('image')->getRealPath()))->post("http://ecoshopepn.herokuapp.com/api/user-avatar?");

        
        return $response;

        return back()->with('status', 'Avatar update successfully');
    }
}