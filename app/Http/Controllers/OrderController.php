<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderLink;

class OrderController extends Controller
{

    public function create($id)
    {
        $customer = Customer::find($id);
        
        return view('order.create', compact("customer"));
    }

    public function store(Request $request, $id)
    {
        $customer = Customer::find($id);

        if (isset($request->name)) {
            foreach ($request->name as $key => $name) {
                $order = new Order();
                $order->name = $name;
                $order->quantity = $request->quantity[$key];
                $order->date = $request->date[$key];
                $order->save();

                $orderLink = new OrderLink();
                $orderLink->customer_id = $id;
                $orderLink->order_id = $order->id;
                $orderLink->save();

                $order = null;
                $orderLink = null;
            }

            $customer->status_id = 3;
            $customer->save();

        } else {}

        return redirect()->route('customer.index', $customer->status_id);
    }

}
