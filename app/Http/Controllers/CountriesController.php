<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\countries;

class CountriesController extends Controller
{
    public function index()
    {
        $countriesDetails = Countries::all()->toArray();
        return response()->json($countriesDetails, 200);
    }

    public function get($id) {
        $countries = Countries::where('country_code', $id)
            ->orderBy('country_name', 'desc')
            ->get()
            ->toArray();
        return response()->json($countries, 200);
    }

    public function create(Request $request) {
        $countries = new Countries();
        $countries->country_name = $request->country_name;
        $countries->country_currency = $request->country_currency;
        $countries->save();

        return response()->json([
            "message" => "Country record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $countries = Countries::find($id);
        $countries->country_name = $request->country_name;
        $countries->country_currency = $request->country_currency;
        $countries->save();

        return response()->json([
            "message" => "Country record updated"
        ], 200);
    }

    public function delete($id) {
        $countries = Countries::find($id);
        $countries->delete();

        return response()->json([
            "message" => "Country record deleted"
        ], 200);
    }
}
