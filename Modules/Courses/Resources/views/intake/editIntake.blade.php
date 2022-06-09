@extends('layouts.backend')

@section('content')
<div class="bg-body-light">
  <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <div class="flex-grow-1">
              <h4 class="h3 fw-bold mb-2">
                  Edit Intake
              </h4>
          </div>
      </div>
  </div>
</div>
    <div class="content">
      <div  style="margin-left:20%;" class="block block-rounded col-md-9 col-lg-8 col-xl-6">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Intake</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-12 space-y-0">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('courses.updateIntake',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div  class="col-12">
                        <label for="intake_name">From:</label>
                        <input type="month" class="form-control form-control-alt" id="intake_name_from" name="intake_name_from" placeholder="Name">
                      
                      </div>
                      <br>
                      <div class="col-12">
                        <label for="intake_name">To:</label>
                        <input type="month" class="form-control form-control-alt" id="intake_name_to" name="intake_name_to" placeholder="Name">
                      </div>
                  </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-dark">update</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
    </div>
@endsection


