<?php

namespace App\Http\Controllers\Api\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course; 
use App\Http\Controllers\Api\ApiController;


class CourseController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();

        $message = 'Course List.';

        return this->sendResponse($course,$message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $data = $req->all();
        $course = Course::create($data);
        $message= 'Course added successfully.';

        return this->sendResponse($course,$message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return $course;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Course $course)
    {
        $data = $req->all();
        $course->update($data);
        $message='Course update successfully.';

        return this->sendResponse($course, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        $message='Course deleted successfully.';

        return this->sendResponse($course,$message);
    }
}
