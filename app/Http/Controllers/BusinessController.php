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
        $business = Business::with("customers", "customers.orderlink.order")->find($id);

        return view('business.show', compact("business"));
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
        $business = Business::find($request->get("business_id"));

        if ($business->customers->count() > 0) {
            session()->flash('error', 'Impossible de supprimer cette entreprise car elle est liée à un ou des contact(s).');
            return redirect()->back();
        }

        $business->delete();

        return redirect()->route("business.index");
    }
}
