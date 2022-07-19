<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComController extends Controller
{
    public function index()
    {
        $name = 'João Silva';
    
        return view('index', compact('name'));
    }
    
}
