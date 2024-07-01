@extends('admin/layouts.main')

@section('content')

<div class="container">
  <div class="page-inner">
    <h2> Courses </h2><br>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-round">
          <div class="card-header">
            <div class="card-head-row card-tools-still-right">
              <h4 class="card-title"> Courses </h4>
              <div class="card-tools">
                <button class="btn btn-icon btn-link btn-primary btn-xs">
                  <span class="fa fa-angle-down"></span> </button>
                <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card">
                  <span class="fa fa-sync-alt"></span> </button>
                <button class="btn btn-icon btn-link btn-primary btn-xs">
                  <span class="fa fa-times"></span> </button>
              </div>
            </div>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Subject </th>
                    <th>Teacher </th>
                    <th>Price </th>
                    <th>Age </th>
                    <th>Time </th>
                    <th>Capacity </th>

                    <th>Edit </th>
                    <th>Show </th>
                    <th>delete </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($courses as $course)
                  <tr>
                      <td>{{ $course->subject }}</td>
                      <td>{{ $course->teacherName }}</td>
                      <td>{{ $course->price }}</td>
                      <td>{{ $course->age }}</td>
                      <td>{{ $course->time }}</td>
                      <td>{{ $course->capacity }}</td>

                      <td><a href="{{ route('editCourse', $course->id) }}">Edit</a></td>
                      <td><a href="{{ route('showCourse', $course->id) }}">Show</a></td>
                      <td>
                        <form action="{{ route('deleteCourse') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{$course->id}}" name="id">
                        <input type="submit" value="Delete"
                          onclick="return confirm('Are you sure you want to delete record ?')">
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection