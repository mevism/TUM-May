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
    <div class="content" style="margin-left: 30%;margin-top:2%;">
        <div class="block block-rounded col-md-8 col-lg-6 col-xl-5">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit School</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
                <div class="col-lg-8 space-y-2">

                   <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('courses.updateSchool/'.$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-12 col-xl-12">
                      <input type="text" class="form-control form-control-alt" value="{{ $data->name }}" id="name" name="name" placeholder="Name">
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