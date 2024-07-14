<?php

namespace App\Http\Controllers;

use App\Models\ResBookings;
use Illuminate\Http\Request;

class ResBookingsController extends Controller
{
    public function index()
    {
        $ResBookingDetails = ResBookings::all()->toArray();
        return response()->json($ResBookingDetails, 200);
    }

    public function get($id) {
        $ResBookings = ResBookings::where('bookings_id', $id)
            ->orderBy('date_of_booking', 'desc')
            ->get()
            ->toArray();
        return response()->json($ResBookings, 200);
    }

    public function create(Request $request) {
        $ResBookings = new ResBookings();
        $ResBookings->date_of_booking = $request->date_of_booking;
        $ResBookings->number_in_party = $request->number_in_party;
        $ResBookings->dinning_table_id = $request->dinning_table_id;
        $ResBookings->customer_id = $request->customer_id;
        $ResBookings->save();

        return response()->json([
            "message" => "ResBookings record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $ResBookings = ResBookings::find($id);
        $ResBookings->date_of_booking = $request->date_of_booking;
        $ResBookings->number_in_party = $request->number_in_party;
        $ResBookings->dinning_table_id = $request->dinning_table_id;
        $ResBookings->customer_id = $request->customer_id;
        $ResBookings->save();
        
        return response()->json([
            "message" => "ResBookings record updated"
        ], 200);
    }

    public function delete($id) {
        $ResBookings = ResBookings::find($id);
        $ResBookings->delete();

        return response()->json([
            "message" => "ResBookings record deleted"
        ], 200);
    }
}
