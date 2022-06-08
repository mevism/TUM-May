@extends('application::layouts.backend')
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-0">
                <div class="flex-grow-0">
                    <h5 class="h5 fw-bold mb-0">
                        Courses
                    </h5>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Courses</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            All Courses
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-12">
            <table class="table table-borderless table-striped js-dataTable-responsive">
                @if(count($data)>0)
                    <tr>
                        <th>Course name</th>
                        <th>Department</th>
                        <th>School</th>
                        <th>Campus</th>
{{--                        <th>Requirements</th>--}}
                        <th>Duration</th>
                        <th>Course type</th>
                        <th colspan="2">Action</th>
                    </tr>
                    @foreach($data as $course)

                        <tr>
                            <td> {{ $course->course_name }}</td>
                            <td> {{ $course->department_id }}</td>
                            <td> {{ $course->school_id }}</td>
                            <td> {{ $course->campus_id }}</td>
{{--                            <td> {{ $course->course_requirements }}</td>--}}
                            <td> {{ $course->course_duration }}</td>
                            <td> Full Time</td>
                            <td nowrap=""> <a class="btn btn-sm btn-alt-secondary" href="{{ route('application.viewOne', $course->id) }}">View </a> </td>
                            <td nowrap=""> <a class="btn btn-sm btn-alt-info" href="{{ route('application.apply', $course->id) }}">Apply now </a> </td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <small class="text-center text-muted">There are no courses on offer</small>
                </tr>
                @endif
        </table>
        </div>
            </div>
        </div>
    </div>
@endsection

