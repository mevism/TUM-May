@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="flex-grow-1">
                    <h5 class="h5 fw-bold mb-0">
                        SCHOOLS
                    </h5>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Schools</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page" >
                            View schools
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
                    <a class="btn btn-alt-info" href="{{ route('courses.addSchool') }}">Add</a>
                </span><br>
                <thead>
                    <th>Schools</th>
                </thead>
                <tbody>@foreach ($data as $school)
                  <tr>
                    <td class="fw-semibold fs-sm">{{ $school->name }}</td>
                    <td> <a class="btn btn-sm btn-alt-info" href="{{ route('courses.editSchool', $school->id) }}">edit</a> </td>
                    <td> <a class="btn btn-sm btn-alt-danger" href="{{ route('courses.destroySchool', $school->id) }}">delete</a> </td> 
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