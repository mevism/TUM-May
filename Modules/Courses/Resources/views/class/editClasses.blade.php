@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
                  Edit Class
              </h4>
          </div>
      </div>
  </div>
</div>
    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Class</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('courses.updateClasses',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-xl-12">
                      <select name="intake_from" id="intake_from" class="form-control form-control-alt">
                        <option selected disabled>{{ $data->name }}</option>
                        @foreach ($intakes as $intake)
                          <option value="{{ $intake->intake_from }}">{{ Carbon\Carbon::parse($intake->intake_from)->format('M-Y') }} - {{ Carbon\Carbon::parse($intake->intake_to)->format('M-Y') }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <select name="attendance" id="attendance"value="{{ $data->attendance }}" class="form-control form-control-alt">
                        <option  disabled> {{ $data->attendance_id }}</option>
                        @foreach ($attendances as $attendance)
                          <option value="{{ $attendance->attendance_name }}">{{ $attendance->attendance_name }}</option>        
                        @endforeach
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <select name="course" id="course" value="{{ $data->course }}"class="form-control form-control-alt">
                        <option selected disabled> {{ $data->course_id }}</option>
                        @foreach ($courses as $course)
                          <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>        
                        @endforeach
                      </select>
                    </div>
                    {{-- <div class="col-12 col-xl-12">
                      <input type="text" value="{{ $data->name }}" class="form-control form-control-alt text-uppercase"  id="name" name="name" placeholder="Name">
                    </div> --}}
                    <div class="col-12 text-center p-3">
                      <button type="submit" class="btn btn-alt-success" data-toggle="click-ripple">Update Class</button>
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
    </div> 
@endsection