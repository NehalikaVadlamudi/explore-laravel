<?php

namespace App\Http\Controllers;

use App\Models\IngredientType;
use Illuminate\Http\Request;

class IngredientTypeController extends Controller
{
    public function index()
    {
        $ingredientTypeDetails = IngredientType::all()->toArray();
        return response()->json($ingredientTypeDetails, 200);
    }

    public function get($id) {
        $ingredientTypes = IngredientType::where('ingredient_type_id', $id)
            ->orderBy('ingredient_type_description', 'desc')
            ->get()
            ->toArray();
        return response()->json($ingredientTypes, 200);
    }

    public function create(Request $request) {
        $ingredientTypes = new IngredientType();
        $ingredientTypes->ingredient_type_description = $request->ingredient_type_description;
        $ingredientTypes->save();

        return response()->json([
            "message" => "IngredientType record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $ingredientTypes = IngredientType::find($id);
        $ingredientTypes->ingredient_type_description = $request->ingredient_type_description;
        $ingredientTypes->save();

        return response()->json([
            "message" => "IngredientType record updated"
        ], 200);
    }

    public function delete($id) {
        $ingredientTypes = IngredientType::find($id);
        $ingredientTypes->delete();

        return response()->json([
            "message" => "IngredientType record deleted"
        ], 200);
    }
}
