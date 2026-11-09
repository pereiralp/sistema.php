<?php

namespace App\Controllers;

class home extends BaseController
{
    public function index(): string
    {
        return view('home');
        return view('welcome_message');
    }
}
