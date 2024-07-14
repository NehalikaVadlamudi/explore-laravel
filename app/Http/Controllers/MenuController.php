<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $MenuDetails = Menu::all()->toArray();
        return response()->json($MenuDetails, 200);
    }

    public function get($id) {
        $menu = Menu::where('menu_id', $id)
            ->orderBy('menu_date', 'desc')
            ->get()
            ->toArray();
        return response()->json($menu, 200);
    }

    public function create(Request $request) {
        $menu = new Menu();
        $menu->menu_date = $request->menu_date;
        $menu->save();

        return response()->json([
            "message" => "Menu record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $menu = Menu::find($id);
        $menu->menu_date = $request->menu_date;
        $menu->save();

        return response()->json([
            "message" => "Menu record updated"
        ], 200);
    }

    public function delete($id) {
        $menu = Menu::find($id);
        $menu->delete();

        return response()->json([
            "message" => "Menu record deleted"
        ], 200);
    }
}
