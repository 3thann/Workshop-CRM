<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;
use App\Models\Customer;

class ActionController extends Controller
{
    public function create($id)
    {
        $customer = Customer::find($id);
        
        return view('action.create', compact("customer"));
    }

    public function store(Request $request, $id)
    {
        $customer = Customer::find($id);

        foreach ($request->description as $key => $description) {
            $action = new Action();
            $action->customer_id = $id;
            $action->business_id = $customer->business_id;
            $action->description = $description;
            $action->answer = $request->answer[$key];
            $action->save();
            $action = null;
        }

        return redirect()->route('customer.index', $customer->status_id);
    }
}