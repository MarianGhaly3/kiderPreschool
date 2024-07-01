<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classs;


class ClassController extends Controller
{

    private $columns = [
        'subject',
        'teacherName',
        'Price',
        'Age',
        'Time',
        'Capacity',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classses = Classs::get();
        return view('admin/classes', compact('classses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/addClass');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required',
            'teacherName' => 'required|max:100|min:5',
            'Price' => 'required|min:11',
            'Age' => 'required',
            'Time' => 'required',
            'Capacity' => 'required',
            //'image' => 'required|image',
        ]);
        
        // $fileName = $this->upload($request->image, 'assets/admin/img');
        // $data['image'] = $fileName;

        Classs::create($data);
        return redirect ('admin/classes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classs = Classs::findOrFail($id);
        return view('admin/showClass', compact('classs'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classs = Classs::findOrFail($id);
        return view('admin/editClass', compact('classs'));    
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
            'Price' => 'required|min:11',
            'Age' => 'required',
            'Time' => 'required',
            'Capacity' => 'required',
        ]);
        Classs::where('id', $id)->update($data);
        //Client::where('id', $id)->update($request->only($this-> columns ));
        return redirect('admin/classes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Classs::where('id', $id)->delete();
        return redirect('admin/classes');    }

    public function trash()
    {
        $trashed = Classs::onlyTrashed()->get();
        return view('admin/trashClass', compact('trashed'));
    }

    /**
     * Restore trashed record.
     */
    public function restore(string $id)
    {
        Classs::where('id', $id)->restore();
        return redirect('admin/classes');
    }

    /**
     * permenant delete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Classs::where('id', $id)->forceDelete();
        return redirect('admin/trashClass');
    }
}
