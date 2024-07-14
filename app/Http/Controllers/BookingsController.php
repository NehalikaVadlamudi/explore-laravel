<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookings;

class BookingsController extends Controller
{
    public function index()
    {
        $bookingsDetails = Bookings::all()->toArray;
        return response()->json($bookingsDetails,200);
    }

    public function get($id) {
        $bookings = Bookings :: where('id',$id)
        ->orderBy('date_from' , 'desc')
        ->get()
        ->toArray();
        return response()->json($bookings,200);
    }

    public function create(Request $request) {
        $bookings = new Bookings();
        $bookings->date_from = $request->date_from;
        $bookings->date_to = $request->date_to;
        $bookings->guest_id = $request->guest_id;
        $bookings->save();

        return response()->json([
            "message" => "Bookings record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $bookings = Bookings::find($id);
        $bookings->date_from = $request->date_from;
        $bookings->date_to = $request->date_to;
        $bookings->guest_id = $request->guest_id;
        $bookings->save();

        return response()->json([
            "message" => "Bookings record updated"
        ], 200);
    }

    public function delete($id){
        $bookings = Bookings::find($id);
        $bookings->delete();

        return response()->json([
            "message" => "Bookings record deleted"
        ], 200);
    }
}
