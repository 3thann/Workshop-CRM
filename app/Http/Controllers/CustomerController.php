<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Business;
use App\Models\Status;
use App\Models\Action;
use App\Models\OrderLink;
use League\Csv\Writer;

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
        $actions = Action::where('customer_id', $id)->get();

        return view('customer.show', compact("customer", "status", "business", "actions"));
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
        $customer->contacted = false;
        $customer->is_dead = false;
        $customer->status_id = 1;

        $customer->save();

        if ($request->get('contacted') == "on"){
            $customer->contacted = true;
        } else {
            $customer->contacted = false;
        }

        if ($request->get('is_dead') == "on"){
            $customer->is_dead = true;
        } else {
            $customer->is_dead = false;
        }

        if ($request->get('contacted') == "on" and count(OrderLink::where('customer_id', $customer->id)->get()) > 0){
            $customer->status_id = 3;
        } else if ($request->get('contacted') == "on" and count(OrderLink::where('customer_id', $customer->id)->get()) < 1){
            $customer->status_id = 2;
        } else {
            $customer->status_id = 1;
        }

        $customer->save();

        return redirect()->route('action.create', $customer->id);
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

        if ($request->get('contacted') == "on"){
            $customer->contacted = true;
        } else {
            $customer->contacted = false;
        }

        if ($request->get('is_dead') == "on"){
            $customer->is_dead = true;
        } else {
            $customer->is_dead = false;
        }

        if ($request->get('contacted') == "on" and count(OrderLink::where('customer_id', $id)->get()) > 0){
            $customer->status_id = 3;
        } else if ($request->get('contacted') == "on" and count(OrderLink::where('customer_id', $id)->get()) < 1){
            $customer->status_id = 2;
        } else {
            $customer->status_id = 1;
        }
        
        $customer->save();

        return redirect()->route('action.create', $id);
    }

    public function destroy(Request $request)
    {
        Customer::find($request->get('customer_id'))->delete();

        return redirect()->route('customer.index', $request->get('status_id_old'));
    }

    public function exportCustomerToCsv()
    {
        $customers = Customer::all();
        $csvExporter = Writer::createFromString('');
    
        $csvExporter->setDelimiter(';');
        $csvExporter->insertOne(['Prenom', 'Nom', 'Email', 'Telephone', 'Entreprise', 'Statut', 'Dernière actions']);
    
        foreach ($customers as $customer) {
            $csvExporter->insertOne([
                $customer->first_name,
                $customer->last_name,
                $customer->email,
                $customer->phone_number,
                $customer->business->name,
                $customer->status->name
            ]);
        }
    
        return response()->streamDownload(function() use ($csvExporter) {
            echo $csvExporter->getContent();
        }, 'Contacts.csv'); redirect()->route('generics.home');
    }
}