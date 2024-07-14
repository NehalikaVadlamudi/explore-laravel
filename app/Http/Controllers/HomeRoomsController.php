<?php

namespace App\Http\Controllers;

use App\Models\HotelRooms;
use Illuminate\Http\Request;

class HomeRoomsController extends Controller
{
    public function index()
    {
        $hotelRoomDetails = HotelRooms::all()->toArray();
        return response()->json($hotelRoomDetails, 200);
    }

    public function get($id) {
        $hotelRoom = HotelRooms::where('id', $id)
            ->orderBy('room_floor', 'desc')
            ->get()
            ->toArray();
        return response()->json($hotelRoom, 200);
    }

    public function create(Request $request) {
        $hotelRoom = new HotelRooms();
        $hotelRoom->room_floor = $request->room_floor;
        $hotelRoom->room_floor_count = $request->room_floor_count;
        $hotelRoom->hotels_id = $request->hotels_id;
        $hotelRoom->ref_room_type_id = $request->ref_room_type_id;
        $hotelRoom->save();

        return response()->json([
            "message" => "HotelRooms record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $hotelRoom = HotelRooms::find($id);
        $hotelRoom->room_floor = $request->room_floor;
        $hotelRoom->room_floor_count = $request->room_floor_count;
        $hotelRoom->hotels_id = $request->hotels_id;
        $hotelRoom->ref_room_type_id = $request->ref_room_type_id;
        $hotelRoom->save();

        return response()->json([
            "message" => "HotelRooms record updated"
        ], 200);
    }

    public function delete($id) {
        $hotelRoom = HotelRooms::find($id);
        $hotelRoom->delete();

        return response()->json([
            "message" => "HotelRooms record deleted"
        ], 200);
    }
}
