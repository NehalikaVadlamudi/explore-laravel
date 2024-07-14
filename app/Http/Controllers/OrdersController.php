<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orderDetails = Orders::all()->toArray();
        return response()->json($orderDetails, 200);
    }

    public function get($id) {
        $orders = Orders::where('order_id', $id)
            ->orderBy('order_date_time', 'desc')
            ->get()
            ->toArray();
        return response()->json($orders, 200);
    }

    public function create(Request $request) {
        $orders = new Orders();
        $orders->order_date_time = $request->order_date_time;
        $orders->staff_id = $request->staff_id;
        $orders->dinning_table_id = $request->dinning_table_id;
        $orders->save();

        return response()->json([
            "message" => "Orders record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $orders = Orders::find($id);
        $orders->order_date_time = $request->order_date_time;
        $orders->staff_id = $request->staff_id;
        $orders->dinning_table_id = $request->dinning_table_id;
        $orders->save();

        return response()->json([
            "message" => "Orders record updated"
        ], 200);
    }

    public function delete($id) {
        $orders = Orders::find($id);
        $orders->delete();

        return response()->json([
            "message" => "Orders record deleted"
        ], 200);
    }
}
