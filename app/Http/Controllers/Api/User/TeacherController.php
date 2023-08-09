<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Controllers\Api\ApiController;

class TeacherController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher= Teacher::all();

        $message = 'Teacher List.';

        return this->sendResponse($teacher, $message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $teacher = Teacher::create($data);
        $message= 'Teacher added successfully.';

        return $this->sendResponse($teacher, $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return $teacher;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Teacher $teacher)
    {
        $data = $req->all();
        $teacher->update($data);
        $message= 'Teacher update successfully.';

        return $this->sendResponse($teacher, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        $message= 'Teacher deleted successfully.';

        return $this->sendResponse($teacher, $message);
    }
}
