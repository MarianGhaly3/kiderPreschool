@extends('layouts.main')

@section('content')
    
        <!-- Carousel Start -->
        @include('includes.carousel')
        <!-- Carousel End -->

        <!-- Facilities Start -->
        @include('includes.facilities')
        <!-- Facilities End -->

        <!-- About Start -->
        @include('includes.about')
        <!-- About End -->

        <!-- Call To Action Start -->
        @include('includes.callToAction')
        <!-- Call To Action End -->

        <!-- Classes Start -->
        @include('includes.classes')
        <!-- Classes End -->

        <!-- Appointment Start -->
        @include('includes.appointment')
        <!-- Appointment End -->

        <!-- Team Start -->
        @include('includes.team')
        <!-- Team End -->

        <!-- Testimonial Start -->
        @include('includes.testimonial')
        <!-- Testimonial End -->

@endsection
