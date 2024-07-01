<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Traits\UploadFile;


class TeacherController extends Controller
{
    use UploadFile;

    private $columns = [
        'teacherName',
        'subject',
        'phone',
        'email',
        'facebook',
        'Twitter',
        'Instagram',
        'image',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('admin/teachers', compact('teachers'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/addTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = $this ->errMsgs();
        $data = $request->validate([
            'teacherName' => 'required|max:100|min:5',
            'subject' => 'required',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'facebook' => 'required|url',
            'Twitter' => 'required|url',
            'Instagram' => 'required|url',
            'image' => 'required|image',
        ], $messages);
        
        $fileName = $this->upload($request->image, 'assets/admin/img');

        $data['image'] = $fileName;

        Teacher::create($data);
        return redirect ('admin/teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $teacher = Teacher::findOrFail($id);
        return view('admin/showTeacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin/editTeacher', compact('teacher'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;

        $messages = $this ->errMsgs();
        $data = $request->validate([
            'teacherName' => 'required|max:100|min:5',
            'subject' => 'required',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',
            'image' => 'sometimes|file:image', //nullable
        ], $messages);
        
        if ($request->hasFile('image')) {
            $fileName = $this->upload($request->image, 'assets/admin/img');
            $data['image'] = $fileName;
        }

        Teacher::where('id', $id)->update($data);
        //Client::where('id', $id)->update($request->only($this-> columns ));
        return redirect('admin/teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Teacher::where('id', $id)->delete();
        return redirect('admin/teachers');
    }

    /**
     * show trashed records.
     */
    public function trash()
    {
        $trashed = Teacher::onlyTrashed()->get();
        return view('admin/trashTeacher', compact('trashed'));
    }

    /**
     * Restore trashed record.
     */
    public function restore(string $id)
    {
        Teacher::where('id', $id)->restore();
        return redirect('admin/teachers');
    }

    /**
     * permenant delete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Teacher::where('id', $id)->forceDelete();
        return redirect('admin/trashTeacher');
    }

    // error custom msgs
    public function errMsgs()
    {
       return [
            'teacherName.required' => 'please enter full name',
            'phone.required' => 'please enter phone number' ,
        ];
    }
}
