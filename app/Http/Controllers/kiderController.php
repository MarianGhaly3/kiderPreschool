<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kiderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Kider Preschool Website";
        return view('index', compact('title'));
    }
    public function about(){
        $title = "About Kider Preschool";
        $title2 = "About Us";
        return view('about', compact('title', 'title2'));
    }
    public function classes(){
        $title = "Classes of Kider Preschool";
        $title2 = "Classes";
        return view('classes', compact('title', 'title2'));
    }
    public function contact(){
        $title = "Contact whith Kider Preschool";
        $title2 = "Contact Us";
        return view('contact', compact('title', 'title2'));
    }
    public function appointment(){
        $title = "Make Appointment with Kider Preschool";
        $title2 = "Appointment";
        return view('appointment', compact('title', 'title2'));
    }
    public function call(){
        $title = "Become A Teacher in Kider Preschool";
        $title2 = "Become A Teacher";
        return view('call', compact('title', 'title2'));
    }
    public function facility(){
        $title = "School Facilities of Kider Preschool";
        $title2 = "Facilities";
        return view('facility', compact('title', 'title2'));
    }
    public function team(){
        $title = "Popular Teachers of Kider Preschool";
        $title2 = "Teachers";
        return view('team', compact('title', 'title2'));
    }
    public function testimonial(){
        $title = "testimonial of Kider Preschool";
        $title2 = "Testimonial";
        return view('testimonial', compact('title', 'title2'));
    }
    public function teacherForm()
    {
        $title = "Apply as a Teacher in Kider Preschool";
        $title2 = "Teacher Form";
         return view('teacherForm', compact('title', 'title2'));
    }

    public function error(){
        $title = "404 Error";
        $title2 = "error";
        return view('error', compact('title', 'title2'));
    }
    public function page(){
        $title = "Pages of Kider Preschool";
        $title2 = "Pages";
        return view('page', compact('title', 'title2'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
