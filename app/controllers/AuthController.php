<?php

namespace App\controllers;


use App\classes\CSRFToken;
use App\classes\Request;
use App\models\Product;

class AuthController extends BaseController
{

    public function showRegisterForm(){
        return view('register');
    }

    public function showLoginForm(){
        return view('login');
    }

    public function register(){

    }

    public function login(){

    }

}
