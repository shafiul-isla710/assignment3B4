<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     
    function index(Request $request){

        $id = $request->id;
        $name = 'Donal Tramp';
        $age = 79;

        $data = [ 'id'=>$id,'name'=>$name, 'age'=>$age];


        $cookie_name = 'access_token';
        $value = '123-XYZ';
        $minutes = 60;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response($data)->cookie(
             $cookie_name,
             $value,
             $minutes,
             $path,
             $domain,
             $secure,
             $httpOnly
        );

    }
}
