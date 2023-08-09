<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Http\Controllers\Api\ApiController;


class StaffController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::all();

        $message = 'Staff List.';

        return this->sendResponse($staff,$message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $staff=Staff::create($data);
        $message='Staff added successfully.';

        return this->sendResponse($staff,$message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        return $staff;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Staff $staff)
    {
        $data = $req->all();
        $staff->update($data);
        $message = 'Staff update successfully.';

        return this->sendResponse($staff, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        $message = 'Staff deleted successfully.';

        return this->sendResponse($staff, $message);
    }
}
