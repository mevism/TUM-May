@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-0">
            <div class="flex-grow-1">
                <h5 class="h5 fw-bold mb-0">
                    COURSES
                </h5>
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
{{-- <div>
  <form action="{{ route('courses.searchCourse') }}" method = "POST" accept-charset=utf8>
    <input type="search" name = 'search-courses'>
    <button type = 'submit'>Search</button>
</form>
</div> --}}

 <!-- Main Container -->
 <main id="main-container">
  <!-- Page Content -->
  <div class="content">

    <!-- Dynamic Table Responsive -->
    <div class="block block-rounded">
      
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-responsive class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
          <span class="d-flex justify-content-end">
            <a class="btn btn-alt-info" href="{{ route('courses.addCourse') }}">Add</a>
        </span><br>
          <thead>
            <tr>
              <th>  Campuses     </th>
              <th>  Schools     </th>
              <th>  Departments </th>
              <th> Courses       </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $courses)
            <tr>            
              <td >{{ $courses->campus_id }}</td>
              <td >{{ $courses->school_id }}</td>
              <td >{{ $courses->department_id }}</td>
              <td >{{ $courses->course_name }}</td>
              <td> <a class="btn btn-sm btn-alt-info" href="{{ route('courses.editCourse', $courses->id) }}">edit</a> </td>
              <td> <a class="btn btn-sm btn-alt-danger" href="{{ route('courses.destroyCourse', $courses->id) }}">delete</a> </td> 
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
<!-- END Main Container -->


@endsection