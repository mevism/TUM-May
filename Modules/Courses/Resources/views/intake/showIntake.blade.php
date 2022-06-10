@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="flex-grow-1">
                    <h5 class="h5 fw-bold mb-0">
                        INTAKES
                    </h5>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Intakes</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            View intakes
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
 
    <main id="main-container">
        <!-- Page Content -->
        
          <!-- Dynamic Table Responsive -->
          <div class="block block-rounded">
           
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-12">
              <table class="table table-borderless table-striped table-vcenter js-dataTable-responsive">
                <span class="d-flex justify-content-end">
                    <a class="btn btn-alt-info btn-sm" href="{{ route('courses.addIntake') }}">Create</a>
                </span>
                <thead>
                    
                  <tr>
                    <th>Intakes</th>
                  </tr>
                  
                </thead>
                <tbody>@foreach ($data as $intake)
                  <tr>
                    <td class="fw-semibold fs-sm">{{ $intake->intake_from }} - {{ $intake->intake_to }}</td>
                    <td> <a class="btn btn-sm btn-alt-secondary" href="{{ route('courses.viewIntake', $intake->id) }}">view</a> </td>
                   {{-- <td> <a class="btn btn-sm btn-alt-info" href="{{ route('courses.editIntake', $intake->id) }}">edit</a> </td> --}}
                    <td> <a class="btn btn-sm btn-alt-danger" href="{{ route('courses.destroyIntake', $intake->id) }}">delete</a> </td> 
                  </tr>
                  @endforeach
         
                </tbody>
              </table>
                </div>
            </div>
          </div>
          <!-- Dynamic Table Responsive -->
        </div>
        <!-- END Page Content -->
    </main>
@endsection
