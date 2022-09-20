<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AuthController extends Controller
{

    public function index(){
        return view('login');
    }

    public function path(){
        return view('pathway');
    }

    public function whindex() {
        return view ('wh.wh-index');
    }


}
