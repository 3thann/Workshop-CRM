<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Business;
use App\Models\Status;

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
        $status = Status::all();
        $business = Business::all();

        return view('customer.show', compact("customer", "status", "business"));
    }

    public function create()
    {
        $statuses = Status::all();
        $businesses = Business::all();

        return view('customer.create', compact('statuses', 'businesses'));
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->first_name = $request->get('first_name');
        $customer->last_name = $request->get('last_name');
        $customer->email = $request->get('email');
        $customer->phone_number = $request->get('phone_number');
        $customer->business_id = $request->get('business_id');
        $customer->status_id = $request->get('status_id');
        $customer->is_dead = $request->get('is_dead');
        $customer->save();

        return redirect()->route('customer.index', $request->get('status_id'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $statuses = Status::all();
        $businesses = Business::all();
        
        return view('customer.edit', compact("customer", "statuses", "businesses"));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->first_name = $request->get('first_name');
        $customer->last_name = $request->get('last_name');
        $customer->email = $request->get('email');
        $customer->phone_number = $request->get('phone_number');
        $customer->business_id = $request->get('business_id');
        $customer->status_id = $request->get('status_id');
        $customer->is_dead = $request->get('is_dead');
        $customer->save();

        return redirect()->route('customer.index', $request->get('status_id'));
    }

    public function destroy(Request $request)
    {
        Customer::find($request->get('customer_id'))->delete();
        return redirect()->route('customer.index', $request->get('status_id_old'));
    }
}