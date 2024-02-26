<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MenuController extends Controller
{
    public function food(){
        return 'Ini adalah halaman products food & beverage';
    }
    public function beauty(){
        return 'Ini adalah halaman products beauty&health';
    }
    public function homecare(){
        return 'Ini adalah halaman products home care';
    }
    public function baby(){
        return 'Ini adalah halaman products baby kid';
    }
}
