<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $course = Course::all();
        // dd($course);
        return view('course.index', [
            'course' => $course
        ]);
    }
    public function create()
    {
        return view('course.create');
    }


    public function store(Request $request)
    {
       try {
        Course::create([
            'course' => $request->course,
            'start' => $request->start,
            'end' => $request->end,
            'price' => $request->price,
            'is_added' => 0
        ]);

        $request->session()->flash('alert--success', 'Registered Successfully!');
        return redirect()->route('course.index');
       } catch (\Throwable $th) {
        throw $th;
       }
    }
    public function delete(Request $request)
    {
        $course = Course::find($request->course_id);
        if (!$course) {
            request()->session()->flash('error', 'Unable to locate');
            return to_route('course.index')->withErrors([
                'error' => 'Unable to locate'
            ]);
        }
        $course->delete();
        $request->session()->flash('alert-info', 'Course deleted successfully!');
        return to_route('course.index');
    }

}
