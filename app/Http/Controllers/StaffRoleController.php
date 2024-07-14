<?php

namespace App\Http\Controllers;

use App\Models\StaffRole;
use Illuminate\Http\Request;

class StaffRoleController extends Controller
{
    public function index()
    {
        $staffRoleDetails = StaffRole::all()->toArray();
        return response()->json($staffRoleDetails, 200);
    }

    public function get($id) {
        $StaffRoles = StaffRole::where('staff_role_id', $id)
            ->orderBy('staff_first_name', 'desc')
            ->get()
            ->toArray();
        return response()->json($StaffRoles, 200);
    }

    public function create(Request $request) {
        $staffRoles = new StaffRole();
        $staffRoles->staff_role_id = $request->staff_role_id;
        $staffRoles->staff_first_name = $request->staff_first_name;
        $staffRoles->save();

        return response()->json([
            "message" => "StaffRole record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        $staffRoles = StaffRole::find($id);
        $staffRoles->staff_first_name = $request->staff_first_name;
        $staffRoles->save();

        return response()->json([
            "message" => "StaffRole record updated"
        ], 200);
    }

    public function delete($id) {
        $staffRoles = StaffRole::find($id);
        $staffRoles->delete();

        return response()->json([
            "message" => "StaffRole record deleted"
        ], 200);
    }
}
