<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Api\ApiController;

class StudentController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Studet::all();

        $message = 'Student list.';

        return this->sendResponse($stundet, $message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $student = Student::create($data);
        $message= 'Student added successfully.';

        return $this->sendResponse($student, $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Student $student)
    {
        $data = $req->all();
        $student->update($data);
        $message = 'Stundet update successfully.';

        return this->sendResponse($student,$message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        $message = 'Student deleted successfully.';

        return this->sendResponse($student, $message);
    }
}
