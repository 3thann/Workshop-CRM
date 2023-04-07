<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\Customer;
use App\Models\OrderLink;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        return view('business.index', compact("businesses"));
    }
    
    public function show($id)
    {
        $business = Business::with("customers")->find($id);
        $orders = OrderLink::where("business_id", $id)->get();

        return view('business.show', compact("business", "orders"));
    }

    public function store(Request $request)
    {
        $business = new Business();
        $business->name = $request->get('name');
        $business->save();

        return redirect()->route('business.index');
    }

    public function edit($id)
    {
        $business = Business::find($id);
        return view('business.edit', compact("business"));
    }

    public function update(Request $request, $id)
    {
        $business = Business::find($id);
        $business->name = $request->get('name');
        $business->save();

        return redirect()->route('business.index');
    }

    public function destroy(Request $request)
    {
        OrderLink::where('business_id', $request->get('business_id'))->delete();
        Customer::where('business_id', $request->get('business_id'))->delete();
        Business::destroy($request->get("business_id"));
        return redirect()->route("business.index");
    }
}
