<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{

    private $columns = [
        'subject',
        'teacherName',
        'price',
        'age',
        'time',
        'capacity',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classses = Course::get();
        return view('admin/courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/addCourse');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required',
            'teacherName' => 'required|max:100|min:5',
            'price' => 'required|min:11',
            'age' => 'required',
            'time' => 'required',
            'capacity' => 'required',
            //'image' => 'required|image',
        ]);
        
        // $fileName = $this->upload($request->image, 'assets/admin/img');
        // $data['image'] = $fileName;

        Course::create($data);
        return redirect ('admin/courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::findOrFail($id);
        return view('admin/showClass', compact('course'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        return view('admin/editCourse', compact('course'));    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;

        $data = $request->validate([
            'subject' => 'required',
            'teacherName' => 'required|max:100|min:5',
            'price' => 'required|min:11',
            'age' => 'required',
            'time' => 'required',
            'capacity' => 'required',
        ]);
        Course::where('id', $id)->update($data);
        //Client::where('id', $id)->update($request->only($this-> columns ));
        return redirect('admin/classes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Course::where('id', $id)->delete();
        return redirect('admin/classes');    }

    public function trash()
    {
        $trashed = Course::onlyTrashed()->get();
        return view('admin/trashClass', compact('trashed'));
    }

    /**
     * Restore trashed record.
     */
    public function restore(string $id)
    {
        Course::where('id', $id)->restore();
        return redirect('admin/classes');
    }

    /**
     * permenant delete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Course::where('id', $id)->forceDelete();
        return redirect('admin/trashClass');
    }
}
