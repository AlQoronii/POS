<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
    public function user($id,$name){
        return 'Selamat Datang User dengan ID: '.$id.' - '.$name;
    }
}
