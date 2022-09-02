<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function path(){
        return view('pathway');
    }


}
