<?php

namespace App\Http\Controllers;

use App\Models\PeriodRoomRates;
use Illuminate\Http\Request;

class PeriodRoomRatesController extends Controller
{
    public function index()
    {
        $periodRoomRateDetails = PeriodRoomRates::all()->toArray();
        return response()->json($periodRoomRateDetails, 200);
    }

    public function get($id) {
        $periodRoomRate = periodRoomRates::where('id', $id)
            ->orderBy('room_rate', 'desc')
            ->get()
            ->toArray();
        return response()->json($periodRoomRate, 200);
    }

    public function create(Request $request) {
        $periodRoomRate = new periodRoomRates();
        $periodRoomRate->room_rate = $request->room_rate;
        $periodRoomRate->ref_room_type_id = $request->ref_room_type_id;
        $periodRoomRate->room_rates_periods_id = $request->room_rates_periods_id;
        $periodRoomRate->save();

        return response()->json([
            "message" => "PeriodRoomRates record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $periodRoomRate = periodRoomRates::find($id);
        $periodRoomRate->room_rate = $request->room_rate;
        $periodRoomRate->ref_room_type_id = $request->ref_room_type_id;
        $periodRoomRate->room_rates_periods_id = $request->room_rates_periods_id;
        $periodRoomRate->save();

        return response()->json([
            "message" => "PeriodRoomRates record updated"
        ], 200);
    }

    public function delete($id) {
        $periodRoomRate = periodRoomRates::find($id);
        $periodRoomRate->delete();

        return response()->json([
            "message" => "PeriodRoomRates record deleted"
        ], 200);
    }
}
