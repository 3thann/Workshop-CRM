<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index($status_id)
    {
        $customers = Customer::where('status_id', $status_id)->get();
        return view('customer.index', compact("customers"));
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show', compact("customer"));
    }

    public function create()
    {
        return view('customer.create');
    }
}