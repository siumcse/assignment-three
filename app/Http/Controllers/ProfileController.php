<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index(Request $request, $id){
        $name = "Donal Trump" ;
        $age = "75" ;

        $data = [ 
            "id" => $id ,
            "name" => $name , 
            "age" => $age  
        ] ;

        $cookie_name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = request()->getHost();
        $secure = false;
        $httpOnly = true;

        $cookie = Cookie::make(
            $cookie_name,
            $value,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );

        return response($data, 200)->withCookie($cookie) ;
    }
    
}
