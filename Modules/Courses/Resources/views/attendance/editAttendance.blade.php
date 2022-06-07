@extends('layouts.backend')


@section('content')
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <div class="flex-grow-1">
              
          </div>
      </div>
  </div>
</div>
    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Attendance</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('courses.updateAttendance',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-xl-12">
                        <select name="intake" class="form-control form-control-alt">
                          <option selected value="{{ $data->intake_id }}"> {{ $data->intake_id }}</option>
                          @foreach ($intakes as $intake)
                          <option value="{{ $intake->intake_name }}">{{ $intake->intake_name }}</option>        
                          @endforeach
                        </select>
                      </div>
                    <div class="col-12 col-xl-12">
                      <input type="text" class="form-control form-control-alt" value="{{ $data->attendance_name }}" id="attendance_name" name="attendance_name" placeholder="Name">
                    </div>
                    <div class="col-12">
                        {{-- {{ Form::hidden('_method','PUT') }} --}}
                      <button type="submit" class="btn btn-dark">Update</button>
                    </div>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
    </div> 
@endsection