<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        $memuItemDetails = MenuItem::all()->toArray();
        return response()->json($memuItemDetails, 200);
    }

    public function get($id) {
        $MenuItem = MenuItem::where('menu_item_id', $id)
            ->orderBy('menu_item_price', 'desc')
            ->get()
            ->toArray();
        return response()->json($MenuItem, 200);
    }

    public function create(Request $request) {
        $MenuItem = new MenuItem();
        $MenuItem->menu_item_description = $request->menu_item_description;
        $MenuItem->menu_item_price = $request->menu_item_price;
        $MenuItem->menu_id = $request->menu_id;
        $MenuItem->save();

        return response()->json([
            "message" => "MenuItem record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $MenuItem = MenuItem::find($id);
        $MenuItem->menu_item_description = $request->menu_item_description;
        $MenuItem->menu_item_price = $request->menu_item_price;
        $MenuItem->menu_id = $request->menu_id;
        $MenuItem->save();

        return response()->json([
            "message" => "MenuItem record updated"
        ], 200);
    }

    public function delete($id) {
        $MenuItem = MenuItem::find($id);
        $MenuItem->delete();

        return response()->json([
            "message" => "MenuItem record deleted"
        ], 200);
    }
}
