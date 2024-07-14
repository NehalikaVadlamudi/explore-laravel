<?php

namespace App\Http\Controllers;

use App\Models\RoomRatePeriods;
use Illuminate\Http\Request;

class RoomRatePeriodsController extends Controller
{
    public function index()
    {
        $roomRatePeriodsDetails = RoomRatePeriods::all()->toArray();
        return response()->json($roomRatePeriodsDetails, 200);
    }

    public function get($id) {
        $roomRatePeriods = RoomRatePeriods::where('id', $id)
            ->orderBy('rate_period_description', 'desc')
            ->get()
            ->toArray();
        return response()->json($roomRatePeriods, 200);
    }

    public function create(Request $request) {
        $roomRatePeriods = new RoomRatePeriods();
        $roomRatePeriods->rate_period_description = $request->room_floorrate_period_description;
        $roomRatePeriods->save();

        return response()->json([
            "message" => "RoomRatePeriods record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $roomRatePeriods = RoomRatePeriods::find($id);
        $roomRatePeriods->rate_period_description = $request->room_floorrate_period_description;
        $roomRatePeriods->save();

        return response()->json([
            "message" => "RoomRatePeriods record updated"
        ], 200);
    }

    public function delete($id) {
        $roomRatePeriods = RoomRatePeriods::find($id);
        $roomRatePeriods->delete();

        return response()->json([
            "message" => "RoomRatePeriods record deleted"
        ], 200);
    }
}
