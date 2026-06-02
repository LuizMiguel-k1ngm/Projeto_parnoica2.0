<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   

public function index(){
    return view('main');
    
}



public function page2(){
    return view('page2');
    
}



public function page3(){
    return view('page3');
    
}

}
