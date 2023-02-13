<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello';
    }

    public function show($id){
        
        $data=array(
            "id"=>$id,
            "name"=>"jere",
            "age"=>22,
            "email"=>"sadasdasd"
        );
        return view('user', $data);
    }
}
