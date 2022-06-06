@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <div class="">
                <h4>DEPARTMENTS</h4>
            </div>
            <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Departments</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        View departments
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
                <a class="btn btn-alt-info" href="{{ route('courses.addDepartment') }}">Add</a>
            </span><hr>
            <thead>
                
              <tr>
                <th class="text-left fs-sm">S/No:</th>
                <th>School</th>
                <th>Department</th>
              </tr>
              
            </thead>
            <tbody>@foreach ($data as $department)
              <tr> 
                <td class="text-left fs-sm">{{ $department->id }}</td>
                <td> {{ $department->school_id }}</td>
                <td> {{ $department->name }}</td>
                 {{-- <td> <a class="btn btn-sm btn-alt-info" href="{{ route('courses.editDepartment/'.$department->id) }}">edit</a> </td>
                <td> <a class="btn btn-sm btn-alt-danger" href="{{ url('destroyDepartment/'.$department->id) }}">delete</a> </td>  --}}
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