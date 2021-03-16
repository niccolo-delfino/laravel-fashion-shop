<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
  public function index(){
   return view('home');
  }

  public function vestiti(){

    $dati_vestiti = Dress::all();
    $data =[
      'dresses' =>$dati_vestiti
    ];

   return view('vestiti', $data);
  }
}
