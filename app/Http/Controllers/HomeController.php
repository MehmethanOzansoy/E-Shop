<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //
    public function index(){
        
        $sliderdata =  Product::limit(2)->get();
        $productlist1 = Product::limit(6)->get();
        return view('home.index',[
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
        ]);
    }

    public function test(){
        return view('home.test');
    }

    public function param($id,$number){
        
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
