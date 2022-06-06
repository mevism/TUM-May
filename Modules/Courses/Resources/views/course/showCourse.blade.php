@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
                <h4 class="h3 fw-bold mb-2">
                    COURSES
                </h4>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Courses</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        View courses
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
      <!-- Dynamic Table Responsive -->
      <div class="block block-rounded">
       
        <div class="block-content block-content-full">
          <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
            <span class="d-flex justify-content-end">
                <a class="btn btn-alt-info" href="{{ route('courses.addCourse') }}">Add</a>
            </span><hr>
            <thead>
                
              <tr>
                <th class="text-left fs-sm">S/No:</th>
                <th>School</th>
                <th>Department</th>
                <th>Course</th>
                <th>Campus</th>
              </tr>
              
            </thead>
            <tbody>@foreach ($data as $courses)
              <tr>
                <td class="text-left fs-sm">{{ $courses->id }}</td>
                <td> {{ $courses->school_id }}</td>
                <td> {{ $courses->department_id }}</td>
                <td> {{ $courses->course_name }}</td>
                <td> {{ $courses->campus }}</td>
                 <td> <a class="btn btn-sm btn-alt-info" href="{{ route('courses.editCourse/'.$course->id) }}">edit</a> </td>
                <td> <a class="btn btn-sm btn-alt-danger" href="{{ url('destroyCourse/'.$course->id) }}">delete</a> </td> 
              </tr>
              @endforeach
     
            </tbody>
          </table>
        </div>
      </div>
      <!-- Dynamic Table Responsive -->
    </div>
    <!-- END Page Content -->
</main>
@endsection