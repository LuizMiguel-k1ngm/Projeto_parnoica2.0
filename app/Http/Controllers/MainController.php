<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class MainController extends Controller
{
   
public function index(){

 $id = session('user.id');
 $user = User::find($id)->toArray();
//  echo '<pre>';
//  print_r($user);

    return view('/home', compact('user'));
    
}


}
