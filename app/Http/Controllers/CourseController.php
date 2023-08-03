<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Add Course
    public function addCourse(Request $request){
        $user = auth()->user();
        if($user->tokenCan('Admin') || $user->tokenCan('Personal') ){
            try {
            $add_course = Course::create([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,            
                'is_active' => $request->is_active,            
            ]);
            $message = 'Course added successfully.';
            return $this->sendResponse(new CourseResource($add_course), $message);
        } catch (\Exception $e) {
            $message = 'An error occurred during the add process.';
            return $this->sendError($message);
        }
        }
        return response()->json(['success'=>false]);
    }
    //Update Course
    public function updateCourse(Request $request ,$id){
        $user = auth()->user();
        if($user->tokenCan('Admin') || $user->tokenCan('Personal') ){
            try {
            $update_course = Course::where('id', $id)->update([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'details' => $request->details,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,              ]);
            $message = 'Course updated successfully.';
            return $this->sendResponse($update_course, $message);
        } catch (\Exception $e) {
            $message = 'Course could not be updated.';
            return $this->sendError($e->getMessage());
        }
        }
        return response()->json(['success'=>false]);
    }
    //Delete Course
    public function deleteCourse($id){
        $user = auth()->user();
        if($user->tokenCan('Admin') || $user->tokenCan('Personal') ){
            try {
            $course_find = Course::find($id);
            $delete_course = $course_find->delete();
            $message = "Course Deleted.";
            return $this->sendResponse($delete_course, $message);
        } catch (\Exception $e) {
            $message = "Something went wrong.";
            return $this->sendError($message);
        }
        }
        return response()->json(['success'=>false]);
    }
    //All Courses
    public function getAllCourses(){
        $all_courses=Course::join('classrooms','courses.classroom_id','classrooms.id')
        ->join('branches','courses.branch_id','branches.id')
        ->select('classrooms.name as ClassName',
                    'branches.name as BranchName',
                    'courses.course_code as courseCode',
                    'courses.course_name as courseName',
                    'courses.course_time as courseTime')->get();
        $message='All courses';
        return $this->sendResponse($all_courses,$message);  
    }
    //courses By Class Id
    public function getcoursesByClassroom(Request $request){
        $classroom_courses=Classroom::where('classrooms.id','=',$request->input('classroomId'))
        ->join('branches','classrooms.id','branches.classroom_id')
        ->join('courses','classrooms.id','courses.classroom_id')
        ->select('classrooms.name as ClassName',
                    'branches.name as BranchName',
                    'courses.course_code as courseCode',
                    'courses.course_name as courseName',
                    'courses.course_time as courseTime')->get();
        $message='Classroom Courses';
        return $this->sendResponse($classroom_courses,$message); 
    }
    //Courses By Branch Id
    public function getCoursesByBranch(Request $request){
        $branch_courses=Branch::where('branches.id','=',$request->input('brnachId'))
        ->join('classrooms','branches.classroom_id','classrooms.id')
        ->join('courses','branches.id','courses.branch_id')
        ->select(
                    'classrooms.name as ClassName',
                    'branches.name as BranchName',
                    'courses.course_code as courseCode',
                    'courses.course_name as courseName',
                    'courses.course_time as courseTime')->get();
        $message='Branch Courses';
        return $this->sendResponse($branch_courses,$message); 
    }
}
