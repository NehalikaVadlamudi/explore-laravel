<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
class GuestController extends Controller
{
    
    public function index()
    {
        $guestDetails = Guest::all()->toArray();
        return response()->json($guestDetails, 200);
    }

    public function get($id) {
        $guests = Guest::where('id', $id)
            ->orderBy('name', 'desc')
            ->get()
            ->toArray();
        return response()->json($guests, 200);
    }

    public function create(Request $request) {
        $guests = new Guest();
        $guests->name = $request->name;
        $guests->address = $request->address;
        $guests->city = $request->city;
        $guests->save();

        return response()->json([
            "message" => "Guest record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $guests = Guest::find($id);
        $guests->name = $request->name;
        $guests->address = $request->address;
        $guests->city = $request->city;
        $guests->save();

        return response()->json([
            "message" => "Guest record updated"
        ], 200);
    }

    public function delete($id) {
        $guests = Guest::find($id);
        $guests->delete();

        return response()->json([
            "message" => "Guest record deleted"
        ], 200);
    }
}

