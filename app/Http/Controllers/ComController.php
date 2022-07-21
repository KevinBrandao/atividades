<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComController extends Controller
{
    public function index()
    {

          $nome = 'João Silva';
          return view('pokemon', compact('nome'));

    //    // $name = 'João Silva';
    //    // return view('index', compact('name'));
        // $energy = 8000;
        // return view('index', compact('energy'));
        
    }
    
}
