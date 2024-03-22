<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }
        
    public function index()
    {
        $user=getenv("username"); 
        return view('indexHome', compact( 'user'));
    }
}
