<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredientDetails = Ingredient::all()->toArray();
        return response()->json($ingredientDetails, 200);
    }

    public function get($id) {
        $ingredient = Ingredient::where('ingredient_id', $id)
            ->orderBy('ingredient_name', 'desc')
            ->get()
            ->toArray();
        return response()->json($ingredient, 200);
    }

    public function create(Request $request) {
        $Ingredient = new Ingredient();
        $Ingredient->ingredient_name = $request->ingredient_name;
        $Ingredient->ingredient_type_id = $request->ingredient_type_id;
        $Ingredient->save();

        return response()->json([
            "message" => "Ingredient record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $Ingredient = Ingredient::find($id);
        $Ingredient->ingredient_name = $request->ingredient_name;
        $Ingredient->ingredient_type_id = $request->ingredient_type_id;
        $Ingredient->save();

        return response()->json([
            "message" => "Ingredient record updated"
        ], 200);
    }

    public function delete($id) {
        $Ingredients = Ingredient::find($id);
        $Ingredients->delete();

        return response()->json([
            "message" => "Ingredient record deleted"
        ], 200);
    }
}
