<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
        return view('home');
    }
    public function Customer()
    {
        echo __METHOD__;
    }
    public function Admin()
    {
        echo __METHOD__;
    }
    public function User()
    {
        echo __METHOD__;
    }
}
