<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class homeController extends Controller
{
    public function index(){
        return(view('welcome'));
    }

    public function inde(Request $request){
        return(view('wel'));
    }
}
