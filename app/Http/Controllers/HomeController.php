<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //
    public function index(){
        
        return view('home.index');
    }

    public function test(){
        return view('home.test');
    }

    public function param($id,$number){
        //echo "Parameter 1 :",$id;
        //echo "<br> Parameter 2 :",$number; 
        //echo "<br> sum of parameters:", $id+$number;
        return view('home.test2',
        [
            'id' => $id,
            'number' => $number
        ]);
    }

    public function save(Request $request){
       
        echo "Save Function";
        echo "<br> First Name: $_REQUEST[fname]";
        echo "<br> Last Name: $_REQUEST[lname]";

    }
    
}
