<?php

namespace App\Http\Controllers;

use App\Models\RefHotelCharacteristicsHotels;
use Illuminate\Http\Request;

class RefHotelCharacteristicsHotelsController extends Controller
{
    public function index()
    {
        $refHotelCharacteristicsHotelsDetails = RefHotelCharacteristicsHotels::all()->toArray();
        return response()->json($refHotelCharacteristicsHotelsDetails, 200);
    }

    public function get($id) {
        $refHotelCharacteristicsHotels = RefHotelCharacteristicsHotels::where('id', $id)
            ->orderBy('hotels_id', 'desc')
            ->get()
            ->toArray();
        return response()->json($refHotelCharacteristicsHotels, 200);
    }

    public function create(Request $request) {
        $refHotelCharacteristicsHotels = new RefHotelCharacteristicsHotels();
        $refHotelCharacteristicsHotels->characteristics_id = $request->characteristics_id;
        $refHotelCharacteristicsHotels->hotels_id = $request->hotels_id;
        $refHotelCharacteristicsHotels->save();

        return response()->json([
            "message" => "RefHotelCharacteristicsHotels record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $refHotelCharacteristicsHotels = RefHotelCharacteristicsHotels::find($id);
        $refHotelCharacteristicsHotels = new RefHotelCharacteristicsHotels();
        $refHotelCharacteristicsHotels->characteristics_id = $request->characteristics_id;
        $refHotelCharacteristicsHotels->hotels_id = $request->hotels_id;
        $refHotelCharacteristicsHotels->save();

        return response()->json([
            "message" => "RefHotelCharacteristicsHotels record updated"
        ], 200);
    }

    public function delete($id) {
        $refHotelCharacteristicsHotels = RefHotelCharacteristicsHotels::find($id);
        $refHotelCharacteristicsHotels->delete();

        return response()->json([
            "message" => "RefHotelCharacteristicsHotels record deleted"
        ], 200);
    }
}
