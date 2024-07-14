<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffDetails = Staff::all()->toArray();
        return response()->json($staffDetails, 200);
    }

    public function get($id) {
        $staff = Staff::where('staff_id', $id)
            ->orderBy('staff_first_name', 'desc')
            ->get()
            ->toArray();
        return response()->json($staff, 200);
    }

    public function create(Request $request) {
        $staff = new Staff();
        $staff->staff_id = $request->staff_id;
        $staff->staff_first_name = $request->staff_first_name;
        $staff->staff_last_name = $request->staff_last_name;
        $staff->staff_role_id = $request->staff_role_id;
        $staff->save();

        return response()->json([
            "message" => "Staff record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $staff = Staff::find($id);
        $staff->staff_first_name = $request->staff_first_name;
        $staff->staff_last_name = $request->staff_last_name;
        $staff->staff_role_id = $request->staff_role_id;
        $staff->save();

        return response()->json([
            "message" => "Staff record updated"
        ], 200);
    }

    public function delete($id) {
        $staff = Staff::find($id);
        $staff->delete();

        return response()->json([
            "message" => "Staff record deleted"
        ], 200);
    }
}
