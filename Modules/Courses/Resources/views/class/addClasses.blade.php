@extends('layouts.backend')

@section('content') 
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
                  
              </h4>
          </div>
          <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                      <a class="link-fx" href="javascript:void(0)">Classes</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    <a  href="showClasses">View Classes</a>
                  </li>
              </ol>
          </nav>
      </div>
  </div>
</div>
    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">ADD CLASS</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('courses.storeClasses') }}" method="POST">
                    @csrf
                    <div class="col-12 col-xl-12">
                      <select name="name" id="name" class="form-control form-control-alt">
                        <option selected disabled>Select Intake</option>
                        @foreach ($intakes as $intake)
                          <option value="{{ $intake->intake_from }}-{{ $intake->intake_to }}">{{ Carbon\Carbon::parse($intake->intake_from)->format('M-Y') }} - {{ Carbon\Carbon::parse($intake->intake_to)->format('M-Y') }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <select name="course" id="course" class="form-control form-control-alt">
                        <option selected disabled> Select Course</option>
                        @foreach ($courses as $course)
                          <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>
                                 
                        @endforeach
                        <input type="hidden" name="course_code" value="{{ $course->course_code }}"> 
                        <input type="hidden" name="course_id" value="{{ $course->id }}"> 
                      </select>
                    </div>
                    <div class="col-12 col-xl-12">
                      <select name="attendance" id="attendance" class="form-control form-control-alt">
                        <option selected disabled> Select Attendance</option>
                        @foreach ($attendances as $attendance)
                          <option value="{{ $attendance->attendance_name }}">{{ $attendance->attendance_name }}</option>        
                        @endforeach
                        <input type="hidden" name="attendance_code" value="{{ $attendance->attendance_code }}"> 
                      </select>
                    </div>
                    
                    {{-- <div class="col-12 col-xl-12">
                      <input type="text" value="{{ old('name') }}" class="form-control form-control-alt text-uppercase" id="name" name="name" placeholder="Class">
                    </div> --}}
                    <div class="col-12 text-center p-3">
                      <button type="submit" class="btn btn-alt-success" data-toggle="click-ripple">Create Class</button>
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
    </div> 
@endsection