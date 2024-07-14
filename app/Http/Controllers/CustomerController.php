<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $CustomerDetails = Customer::all()->toArray();
        return response()->json($CustomerDetails, 200);
    }

    public function get($id) {
        $Customers = Customer::where('customer_id', $id)
            ->orderBy('customer_first_name', 'desc')
            ->get()
            ->toArray();
        return response()->json($Customers, 200);
    }

    public function create(Request $request) {
        $Customers = new Customer();
        $Customers->customer_id = $request->customer_id;
        $Customers->customer_first_name = $request->customer_first_name;
        $Customers->customer_last_name = $request->customer_last_name;
        $Customers->phone_number = $request->phone_number;
        $Customers->cellphone_number = $request->cellphone_number;
        $Customers->email_address = $request->email_address;
        $Customers->other_customer_details = $request->other_customer_details;
        $Customers->save();

        return response()->json([
            "message" => "Customer record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $Customers = Customer::find($id);
        $Customers->customer_first_name = $request->customer_first_name;
        $Customers->customer_last_name = $request->customer_last_name;
        $Customers->phone_number = $request->phone_number;
        $Customers->cellphone_number = $request->cellphone_number;
        $Customers->email_address = $request->email_address;
        $Customers->other_customer_details = $request->other_customer_details;
        $Customers->save();
        
        return response()->json([
            "message" => "Customer record updated"
        ], 200);
    }

    public function delete($id) {
        $customers = Customer::find($id);
        $customers->delete();

        return response()->json([
            "message" => "Customer record deleted"
        ], 200);
    }
}
