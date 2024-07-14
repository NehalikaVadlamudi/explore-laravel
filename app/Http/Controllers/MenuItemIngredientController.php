<?php

namespace App\Http\Controllers;

use App\Models\MenuItemIngredient;
use Illuminate\Http\Request;

class MenuItemIngredientController extends Controller
{
    public function index()
    {
        $menuItemIngredientDetails = MenuItemIngredient::all()->toArray();
        return response()->json($menuItemIngredientDetails, 200);
    }

    public function get($id) {
        $MenuItemIngredients = MenuItemIngredient::where('menuItemIngredient_id', $id)
            ->orderBy('item_quantity', 'desc')
            ->get()
            ->toArray();
        return response()->json($MenuItemIngredients, 200);
    }

    public function create(Request $request) {
        $menuItemIngredients = new MenuItemIngredient();
        $menuItemIngredients->item_quantity = $request->item_quantity;
        $menuItemIngredients->menu_item_id = $request->menu_item_id;
        $menuItemIngredients->ingredient_id = $request->ingredient_id;
        $menuItemIngredients->save();

        return response()->json([
            "message" => "MenuItemIngredient record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $menuItemIngredients = MenuItemIngredient::find($id);
        $menuItemIngredients->item_quantity = $request->item_quantity;
        $menuItemIngredients->menu_item_id = $request->menu_item_id;
        $menuItemIngredients->ingredient_id = $request->ingredient_id;
        $menuItemIngredients->save();

        return response()->json([
            "message" => "MenuItemIngredient record updated"
        ], 200);
    }

    public function delete($id) {
        $menuItemIngredients = MenuItemIngredient::find($id);
        $menuItemIngredients->delete();

        return response()->json([
            "message" => "MenuItemIngredient record deleted"
        ], 200);
    }
}
