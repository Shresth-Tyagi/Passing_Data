<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PassingDataController extends Controller
{

   public function index(){
     /*  $value = session()->all();
     echo "<pre>";
     print_r($value);
     echo "</pre>";*/

    $value = session()->get('name');
    echo $value; 
    $value1 = session()->get('class');
    echo "<br>" . $value1; 

   }

   public function storesession(){

    session()->put('name','Shresth Tyagi');
    session()->put('class','Btech');
    session()->regenerate(); // use to generate the new token of session for prevent hacking

    return redirect('/');

   }

   public function deletesession(){
    
    session()->forget('name');
    session()->forget('class');
   
   }



// Not use in session
public function getdata(){

     $data =  Student::all();
     return view('welcome', ['data' => $data]);

    }

public function show($id){

    $data =  Student::find($id);
    return view('profile', compact('data'));
}

  
}
