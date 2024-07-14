<?php

namespace App\Http\Controllers;

use App\Models\RefRoomType;
use Illuminate\Http\Request;

class RefRoomTypeController extends Controller
{
    public function index()
    {
        $roomRefTypeDetails = RefRoomType::all()->toArray();
        return response()->json($roomRefTypeDetails, 200);
    }

    public function get($id) {
        $roomRefType = RefRoomType::where('id', $id)
            ->orderBy('room_standard_rate', 'desc')
            ->get()
            ->toArray();
        return response()->json($roomRefType, 200);
    }

    public function create(Request $request) {
        $roomRefType = new RefRoomType();
        $roomRefType->room_standard_rate = $request->room_standard_rate;
        $roomRefType->room_type_description = $request->room_type_description;
        $roomRefType->smoking_YN = $request->smoking_YN;
        $roomRefType->save();

        return response()->json([
            "message" => "RefRoomType record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $roomRefType = RefRoomType::find($id);
        $roomRefType->room_standard_rate = $request->room_standard_rate;
        $roomRefType->room_type_description = $request->room_type_description;
        $roomRefType->smoking_YN = $request->smoking_YN;
        $roomRefType->save();

        return response()->json([
            "message" => "RefRoomType record updated"
        ], 200);
    }

    public function delete($id) {
        $roomRefType = RefRoomType::find($id);
        $roomRefType->delete();

        return response()->json([
            "message" => "RefRoomType record deleted"
        ], 200);
    }
}
