<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
        $hotelsDetails = Hotels::all()->toArray();
        return response()->json($hotelsDetails, 200);
    }

    public function get($id) {
        $hotels = Hotels::where('id', $id)
            ->orderBy('hotel_name', 'desc')
            ->get()
            ->toArray();
        return response()->json($hotels, 200);
    }

    public function create(Request $request) {
        $hotels = new Hotels();
        $hotels->hotel_code = $request->hotel_code;
        $hotels->hotel_name = $request->hotel_name;
        $hotels->hotel_address = $request->hotel_address;
        $hotels->hotel_postcode = $request->hotel_postcode;
        $hotels->hotel_city = $request->hotel_city;
        $hotels->hotel_url = $request->hotel_url;
        $hotels->save();

        return response()->json([
            "message" => "Hotel record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $hotels = Hotels::find($id);
        $hotels->hotel_code = $request->hotel_code;
        $hotels->hotel_name = $request->hotel_name;
        $hotels->hotel_address = $request->hotel_address;
        $hotels->hotel_postcode = $request->hotel_postcode;
        $hotels->hotel_city = $request->hotel_city;
        $hotels->hotel_url = $request->hotel_url;
        $hotels->save();

        return response()->json([
            "message" => "Hotel record updated"
        ], 200);
    }

    public function delete($id) {
        $hotels = Hotels::find($id);
        $hotels->delete();

        return response()->json([
            "message" => "Hotel record deleted"
        ], 200);
    }
}
