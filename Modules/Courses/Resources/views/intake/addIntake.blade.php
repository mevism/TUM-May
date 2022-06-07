@extends('layouts.backend')

@section('content') 
<div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="">
                    
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Intakes</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                          <a  href="showIntake">View Intakes</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
</div>

    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">ADD Intake</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('courses.storeIntake') }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-12">                
                      </div>
                        <div  class="col-12">
                          <label for="intake_name">From:</label>
                          {{-- <input type="month" class="form-control form-control-alt" id="intake_name" name="intake_name_from" placeholder="Name"> --}}
                          <select class="form-control form-control-alt" name="intake_name_from" id="intake_name">
                            <option selected disabled> </option>
                            <option value="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="Sept">September</option>
                            <option value="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                          </select>
                        </div>
                        <br>
                        <div class="col-12">
                          <label for="intake_name">To:</label>
                          {{-- <input type="month" class="form-control form-control-alt" id="intake_name" name="intake_name_to" placeholder="Name"> --}}
                          <select type="month" class="form-control form-control-alt" name="intake_name_to" id="intake_name">
                            <option selected disabled> </option>
                            <option value="Jan">January</option>
                            <option value="Feb">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="Sept">September</option>
                            <option value="Oct">October</option>
                            <option value="Nov">November</option>
                            <option value="Dec">December</option>
                          </select>
                        </div>
                    </div>
                    <select name="course[]" multiple id="course" class="form-control form-control-alt">
                      <option selected diasabled>Select Course</option>
                      @foreach ($courses as $course)
                      <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>                      
                      @endforeach
                    </select>
          
                
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark">Add</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
