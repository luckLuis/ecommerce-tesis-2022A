<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $usuarios =\DB::table('users')
                    ->select('users.*')
                    ->orderBy('id', 'DESC')
                    ->get();
        return view('usuarios')->with('usuarios', $usuarios);
    }
}