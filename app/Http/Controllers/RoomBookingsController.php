<?php

namespace App\Http\Controllers;

use App\Models\RoomBookings;
use Illuminate\Http\Request;

class RoomBookingsController extends Controller
{
    public function index()
    {
        $roomBookingsDetails = RoomBookings::all()->toArray();
        return response()->json($roomBookingsDetails, 200);
    }

    public function get($id) {
        $roomBookings = RoomBookings::where('id', $id)
            ->orderBy('date_booking_from', 'desc')
            ->get()
            ->toArray();
        return response()->json($roomBookings, 200);
    }

    public function create(Request $request) {
        $roomBookings = new RoomBookings();
        $roomBookings->date_booking_from = $request->date_booking_from;
        $roomBookings->date_booking_to = $request->date_booking_to;
        $roomBookings->room_count = $request->room_count;
        $roomBookings->hotels_id = $request->hotels_id;
        $roomBookings->ref_room_type_id = $request->ref_room_type_id;
        $roomBookings->save();

        return response()->json([
            "message" => "RoomBookings record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $roomBookings = RoomBookings::find($id);
        $roomBookings->date_booking_from = $request->date_booking_from;
        $roomBookings->date_booking_to = $request->date_booking_to;
        $roomBookings->room_count = $request->room_count;
        $roomBookings->hotels_id = $request->hotels_id;
        $roomBookings->ref_room_type_id = $request->ref_room_type_id;
        $roomBookings->save();

        return response()->json([
            "message" => "RoomBookings record updated"
        ], 200);
    }

    public function delete($id) {
        $roomBookings = RoomBookings::find($id);
        $roomBookings->delete();

        return response()->json([
            "message" => "RoomBookings record deleted"
        ], 200);
    }
}
