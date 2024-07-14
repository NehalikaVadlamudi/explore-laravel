<?php

namespace App\Http\Controllers;

use App\Models\Characteristics;
use Illuminate\Http\Request;

class CharacteristicsController extends Controller
{
    public function index()
    {
        $charecteristicsDetails = Characteristics::all()->toArray();
        return response()->json($charecteristicsDetails, 200);
    }

    public function get($id) {
        $charecteristics = Characteristics::where('id', $id)
            ->orderBy('charecteristics_code', 'desc')
            ->get()
            ->toArray();
        return response()->json($charecteristics, 200);
    }

    public function create(Request $request) {
        $charecteristics = new Characteristics();
        $charecteristics->charecteristics_code = $request->charecteristics_code;
        $charecteristics->characteristic_description = $request->characteristic_description;
        $charecteristics->save();

        return response()->json([
            "message" => "Characteristics record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $charecteristics = Characteristics::find($id);
        $charecteristics->charecteristics_code = $request->charecteristics_code;
        $charecteristics->characteristic_description = $request->characteristic_description;
        $charecteristics->save();

        return response()->json([
            "message" => "Characteristics record updated"
        ], 200);
    }

    public function delete($id) {
        $charecteristics = Characteristics::find($id);
        $charecteristics->delete();

        return response()->json([
            "message" => "Characteristics record deleted"
        ], 200);
    }
}
