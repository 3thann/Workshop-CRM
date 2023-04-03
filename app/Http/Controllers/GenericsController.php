<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericsController extends Controller
{
    public function index()
    {
        return view('generics.home');
    }
}
