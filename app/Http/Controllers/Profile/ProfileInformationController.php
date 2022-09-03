<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ProfileInformationController extends Controller
{
    private string $ui_avatar_api = "https://ui-avatars.com/api/?name=*+*&size=128";

    public function edit()
    {


        $user = Http::post('http://ecoshopepn.herokuapp.com/api/login?login_field=luis@hm.com&password=Y2345678p$');


        $token = $user['token'];

        //$this -> user = $user['token'];

        $userArray = $user->json();   
        
        $user = $userArray['user'];

        //return $userArray;

        $categories = Http::get('https://ecoshopepn.herokuapp.com/api/category');

        $avatar = Http::get('https://ecoshopepn.herokuapp.com/api/showAvatar/17');



        $categoriesArray = $categories->json();

        //return redirect('/', compact('token'));

        //return $avatar;

        return view('profile.show', compact('categoriesArray', 'token', 'user', 'avatar'));
    }

    public function update(Request $request)
    {

        $request->validate([
           // 'username' => ['required', 'string', 'min:3', 'max:20', 'unique:users'],
            'birthdate' => ['nullable', 'string', 'date_format:d/m/Y',
                'after_or_equal:' . date('Y-m-d', strtotime('-70 years')),
                'before_or_equal:' . date('Y-m-d', strtotime('-18 years'))],
            'personal_phone' => ['required', 'numeric', 'digits:10'],
            'home_phone' => ['required', 'numeric', 'digits:9'],
            'address' => ['required', 'string', 'min:5', 'max:50'],
        ]);


        $user = Http::withToken('Bearer 185|MJjLMVcxy1bPOvA9MaRlm6pFTBsH41jgg40DpNq6')->get('http://ecoshopepn.herokuapp.com/api/update?',
        [
            'first_name'=>'Luis',
            'last_name'=>'Jacome',
            'personal_phone' =>$request->personal_phone,
            'home_phone' => $request->home_phone,
            'address'=> $request->address,
        ]);



        return back()->with('status', 'Información personal actualizada con éxito');
    }




    private function verifyDateFormat(?string $date): ?string
    {
        return isset($date)
            ? $this->changeDateFormat($date, 'd/m/Y')
            : null;
    }


    public static function changeDateFormat(
        string $date,
        string $date_format,
        string $expected_format = 'Y-m-d'
    ): string
    {
        return Carbon::createFromFormat($date_format, $date)->format($expected_format);
    }







}