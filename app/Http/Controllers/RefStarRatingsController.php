<?php

namespace App\Http\Controllers;

use App\Models\RefStarRatings;
use Illuminate\Http\Request;

class RefStarRatingsController extends Controller
{
    public function index()
    {
        $refStarRatingsDetails = RefStarRatings::all()->toArray();
        return response()->json($refStarRatingsDetails, 200);
    }

    public function get($id) {
        $refStarRatings = RefStarRatings::where('id', $id)
            ->orderBy('star_ratings_code', 'desc')
            ->get()
            ->toArray();
        return response()->json($refStarRatings, 200);
    }

    public function create(Request $request) {
        $refStarRatings = new RefStarRatings();
        $refStarRatings->star_ratings_code = $request->star_ratings_code;
        $refStarRatings->save();

        return response()->json([
            "message" => "RefStarRatings record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $refStarRatings = RefStarRatings::find($id);
        $refStarRatings->star_ratings_code = $request->star_ratings_code;
        $refStarRatings->save();

        return response()->json([
            "message" => "RefStarRatings record updated"
        ], 200);
    }

    public function delete($id) {
        $refStarRatings = RefStarRatings::find($id);
        $refStarRatings->delete();

        return response()->json([
            "message" => "RefStarRatings record deleted"
        ], 200);
    }
}
