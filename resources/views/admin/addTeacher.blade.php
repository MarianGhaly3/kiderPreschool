@extends('admin/layouts.main')

@section('content')

<div class="container">
    <div class="page-inner">
        <h2>Add Teacher</h2><br>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-round">
                <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <h4 class="card-title"> Add New Teacher</h4>
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
                    <form action="{{ route('TeacherInserted') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" value="{{ old('teacherName') }}">
                                    <label for="name">Teacher Name</label>
                                    @error('teacherName')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" value="{{ old('email') }}">
                                    <label for="email">Teacher Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="Phone" name="phone" placeholder="Your Phone" value="{{ old('phone') }}">
                                    <label for="Phone">Teacher Phone</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div style="background:white; padding: 15px; border-radius: 10px;">
                                    <p>Please select Teacher Subject:</p>
                                    <input type="radio" id="Art" name="Subject" value="Art">
                                    <label for="Art">Art & Drawing</label><br>

                                    <input type="radio" id="Management" name="Subject" value="Color Management">
                                    <label for="Management">Color Management</label><br>

                                    <input type="radio" id="Language" name="Subject" value="Language & Speaking">
                                    <label for="Language">Language & Speaking</label><br>

                                    <input type="radio" id="Athletic" name="Subject" value="Athletic & Dance">
                                    <label for="Athletic">Athletic & Dance</label><br>

                                    <input type="radio" id="Religion" name="Subject" value="Religion & History">
                                    <label for="Religion">Religion & History</label><br>

                                    <input type="radio" id="Knowledge" name="Subject" value="General Knowledge">
                                    <label for="Knowledge">General Knowledge</label><br>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="img" name="img" placeholder="Teacher Image">
                                    <label for="Facebook">Teacher Image</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="facebook" name="facebook" placeholder="Your Facebook" value="{{ old('facebook') }}">
                                    <label for="facebook">Your Facebook</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="twitter" name="twitter"
                                        placeholder="Teacher Twitter" value="{{ old('twitter') }}">
                                    <label for="twitter">Teacher Twitter</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="url" class="form-control" id="instagram" name="instagram"
                                        placeholder="Teacher Instagram" value="{{ old('instagram') }}">
                                    <label for="instagram">Teacher Instagram</label>
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
            <label for="phone">Phone :</label>
            <p style="color:red">
                @error('phone')
                    {{$message}}
                @enderror
            </p>
            <input class="form-control" type="phone" id="phone" name="phone" value="{{ old('phone') }}">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <p style="color:red">
                @error('email')
                    {{$message}}
                @enderror
            </p>
            <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="website">website :</label>
            <p style="color:red">
                @error('website')
                    {{$message}}
                @enderror
            </p>
            <input class="form-control" type="text" id="website" name="website" value="{{ old('website') }}">
        </div>
        <div class="form-group">
            <label for="city">City :</label>
            <p style="color:red">
                @error('city')
                    {{$message}}
                @enderror
            </p>
            <select class="form-control" type="text" id="city" name="city">
                <option value="">Please Select City</option>
                <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : ''}}>Cairo</option>
                <option value="Giza" {{ old('city') == 'Giza' ? 'selected' : ''}}>Giza</option>
                <option value="Alex" {{ old('city') == 'Alex' ? 'selected' : ''}}>Alex</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" class="form-control" value="{{ old('image') }}"><br>
        </div>
        <div class="form-group">
            <label for="active">Active:</label>
            <input type="checkbox" id="active" name="active" class="form-control" {{ old('active') ? 'checked' : '' }}><br>
        </div>
-->

    </div>
</div>


@endsection