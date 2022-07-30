<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->lastname = $request->lastname;
        $customer->phone = $request->phone;

        $customer->save();
        return 'cliente creado';
    }
    
    public function show(Request $request)
    {
        $customer = Customer::find($request->id);

        return $customer;
    }
    
    public function update(Request $request)
    {
        $customer = Customer::find($request->id);

        $customer->name = $request->name;
        $customer->lastname = $request->lastname;
        $customer->phone = $request->phone;
        $customer->save();

        return $customer;
    }

    public function destroy(Request $request)
    {
        $customer = Customer::destroy($request->id);

        return $customer;
    }

}
