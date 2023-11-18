<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function index($id=null){
       $p_name = "Donald Trump";
       $p_age = "75";
       $data = array(
        "id"=> $id,
        "name"=> $p_name,
        "age"=> $p_age
       );
       return response()->json($data)->cookie( $name = "access_token",
       $value = "123-XYZ",
       $minutes = 1,
       $path = "/",
       $domain =$_SERVER['SERVER_NAME'],
       $secure = false,
       $httponly = true)->setStatusCode(200);

    }
}
