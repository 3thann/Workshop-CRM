<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index()
    {
        $companies = Business::all();
        return view('business.index', compact("companies"));
    }
}
