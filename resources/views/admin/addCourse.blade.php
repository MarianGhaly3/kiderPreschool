@extends('admin/layouts.main')

@section('content')

    <div class="container">
        <div class="page-inner">
            <h2>Add Course</h2><br>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                    <div class="card-header">
                        <div class="card-head-row card-tools-still-right">
                        <h4 class="card-title"> Add New Course</h4>
                        <div class="card-tools">
                            <button class="btn btn-icon btn-link btn-primary btn-xs" >
                            <span class="fa fa-angle-down"></span> </button>
                            <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card" >
                            <span class="fa fa-sync-alt"></span> </button>
                            <button class="btn btn-icon btn-link btn-primary btn-xs" >
                            <span class="fa fa-times"></span> </button>
                        </div>
                        </div>
                        <p class="card-category"> </p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <form action="{{ route('CourseInserted') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-3">

                               <div class="col-12">
                                    <div style="background:white; padding: 15px; border-radius: 10px;">
                                        <p>Please select Subject:</p>
                                        <select class="form-control" type="text" id="subject" name="subject">
                                            <option value="Art" {{ old('subject') == 'Art' ? 'selected': ''}} >Art & Drawing</option>
                                            <option value="Management" {{ old('subject') == 'Management' ? 'selected': ''}} >Color Management</option>
                                            <option value="Language" {{ old('subject') == 'Language' ? 'selected': ''}} >Language & Speaking</option>
                                            <option value="Athletic" {{ old('subject') == 'Athletic' ? 'selected': ''}} >Athletic & Dance</option>
                                            <option value="Religion" {{ old('subject') == 'Religion' ? 'selected': ''}} >Religion & History</option>
                                            <option value="Knowledge" {{ old('subject') == 'Knowledge' ? 'selected': ''}} >General Knowledge</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                   <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" value="{{ old('teacherName') }}" name="teacherName">
                                        <label for="teacherName">Teacher Name</label>
                                        @error('teacherName')
                                            {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Course Price" value="{{ old('price') }}">
                                        <label for="price">Course Price</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="age" name="age" placeholder="Course age" value="{{ old('age') }}">
                                        <label for="age">Course age</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <input type="text" class="form-control" id="time" name="time" placeholder="Course Time" value="{{ old('time') }}">
                                    <label for="time">Course Time</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                    <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Course Capacity" value="{{ old('capacity') }}">
                                    <label for="capacity">Course Capacity</label>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>


                    </div>
                </div>
            </div>

            <!--
            <div class="form-group">
                <label for="clientname">Client name:</label>
                <p style="color:red">
                    @error('clientName')
                        {{$message}}
                    @enderror
                </p>
                <input class="form-control" type="text" id="cname" name="clientName" value="{{ old('clientName') }}">
            </div>

            <div class="form-group">
                <label for="active">Active:</label>
                <input type="checkbox" id="active" name="active" class="form-control" {{ old('active') ? 'checked' : '' }}><br>
            </div>
    -->

        </div>
    </div>


@endsection