<?php

namespace App\Http\Controllers;

use App\Models\HotelChains;
use Illuminate\Http\Request;

class HotelChainsController extends Controller
{
    public function index()
    {
        $hotelChainsDetails = HotelChains::all()->toArray();
        return response()->json($hotelChainsDetails, 200);
    }

    public function get($id) {
        $hotelChains = HotelChains::where('id', $id)
            ->orderBy('name', 'desc')
            ->get()
            ->toArray();
        return response()->json($hotelChains, 200);
    }

    public function create(Request $request) {
        $hotelChains = new HotelChains();
        $hotelChains->name = $request->name;
        $hotelChains->save();

        return response()->json([
            "message" => "HotelChains record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $hotelChains = HotelChains::find($id);
        $hotelChains->name = $request->name;
        $hotelChains->save();

        return response()->json([
            "message" => "HotelChains record updated"
        ], 200);
    }

    public function delete($id) {
        $hotelChains = HotelChains::find($id);
        $hotelChains->delete();

        return response()->json([
            "message" => "HotelChains record deleted"
        ], 200);
    }
}
