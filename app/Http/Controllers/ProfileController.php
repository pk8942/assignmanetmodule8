<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function index($id=null){
       $name = "Donald Trump";
       $age = "75";
       $data = array(
        "id"=> $id,
        "name"=> $name,
        "age"=> $age
       );
       return response()->json($data)->cookie( $name = "access_token",
       $value = "123-XYZ",
       $minutes = 60,
       $path = "/",
       $domain =$_SERVER['SERVER_NAME'],
       $secure = false,
       $httponly = true)->setStatusCode(200);

    }
}
