<?php

namespace App\Http\Controllers;

use App\Models\OrderMenuItem;
use Illuminate\Http\Request;

class OrderMenuItemController extends Controller
{
    public function index()
    {
        $OrderMenuItemDetails = OrderMenuItem::all()->toArray();
        return response()->json($OrderMenuItemDetails, 200);
    }

    public function get($id) {
        $orderMenuItem = OrderMenuItem::where('order_menu_item_id', $id)
            ->orderBy('order_menu_item_quantity', 'desc')
            ->get()
            ->toArray();
        return response()->json($orderMenuItem, 200);
    }

    public function create(Request $request) {
        $orderMenuItem = new OrderMenuItem();
        $orderMenuItem->order_menu_item_id = $request->order_menu_item_id;
        $orderMenuItem->order_menu_item_quantity = $request->order_menu_item_quantity;
        $orderMenuItem->save();

        return response()->json([
            "message" => "OrderMenuItem record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $orderMenuItem = OrderMenuItem::find($id);
        $orderMenuItem->order_menu_item_quantity = $request->order_menu_item_quantity;
        $orderMenuItem->save();

        return response()->json([
            "message" => "OrderMenuItem record updated"
        ], 200);
    }

    public function delete($id) {
        $orderMenuItem = OrderMenuItem::find($id);
        $orderMenuItem->delete();

        return response()->json([
            "message" => "OrderMenuItem record deleted"
        ], 200);
    }
}
