@extends('admin/layouts.main')

@section('content')

<div class="container">
  <div class="page-inner">
    <h2> Students (Kids) </h2><br>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-round">
          <div class="card-header">
            <div class="card-head-row card-tools-still-right">
              <h4 class="card-title"> Students </h4>
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
                    <th>Student Name </th>
                    <th>Garidan Name </th>
                    <th>Subject (Class) </th>
                    <th>Phone </th>
                    <th>Email </th>
                    <th>Edit </th>
                    <th>Show </th>
                    <th>delete </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($teachers as $teacher)
                  <tr>
                      <td>{{ $teacher->teacherName }}</td>
                      <td>{{ $teacher->subject }}</td>
                      <td>{{ $teacher->phone }}</td>
                      <td>{{ $teacher->email }}</td>
                      <td><a href="{{ route('editTeacher', $teacher->id) }}">Edit</a></td>
                      <td><a href="{{ route('showTeacher', $teacher->id) }}">Show</a></td>
                      <td>
                        <form action="{{ route('deleteTeacher') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" value="{{$teacher->id}}" name="id">
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