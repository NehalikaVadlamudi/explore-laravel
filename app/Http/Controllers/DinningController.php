<?php

namespace App\Http\Controllers;

use App\Models\Dinning;
use Illuminate\Http\Request;

class DinningController extends Controller
{
    public function index()
    {
        $dinningDetails = Dinning::all()->toArray();
        return response()->json($dinningDetails, 200);
    }

    public function get($id) {
        $dinning = Dinning::where('dinning_table_id', $id)
            ->orderBy('dinning_table_details', 'desc')
            ->get()
            ->toArray();
        return response()->json($dinning, 200);
    }

    public function create(Request $request) {
        $dinning = new Dinning();
        $dinning->dinning_table_details = $request->dinning_table_details;
        $dinning->save();

        return response()->json([
            "message" => "Dinning record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $dinning = Dinning::find($id);
        $dinning->dinning_table_details = $request->dinning_table_details;
        $dinning->save();

        return response()->json([
            "message" => "Dinning record updated"
        ], 200);
    }

    public function delete($id) {
        $dinning = Dinning::find($id);
        $dinning->delete();

        return response()->json([
            "message" => "Dinning record deleted"
        ], 200);
    }
}
