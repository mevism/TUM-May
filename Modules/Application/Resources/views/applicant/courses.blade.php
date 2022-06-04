@extends('application::layouts.backend')
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h5 fw-bold mb-2">
                        Courses
                    </h1>
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
                    <table class="table table-responsive-md table-borderless table-striped">
                        @if(count($data)> 0)
                            <thead>
                            <tr>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>School</th>
                                <th>Department</th>
                                <th>Duration</th>
                                <th>Requirement</th>
                                <th>Course Type</th>
                                <th> Apply</th>
                            </tr>
                            </thead>
                        <tbody>
                            @foreach ($data as $course)
                                <tr>
                                    <td> {{ $course->course_code }}</td>
                                    <td> {{ $course->course_name }}</td>
                                    <td> {{ $course->school_id }}</td>
                                    <td> {{ $course->department_id }}</td>
                                    <td> {{ $course->course_duration }}</td>
                                    <td> {{ $course->course_requirements }}</td>
                                    <td> Full Time</td>
                                    <td nowrap=""> <a class="btn btn-sm btn-alt-info" href="{{ route('application.apply', $course->id) }}">Apply now </a> </td>
                                </tr>
                            @endforeach
                        @else

                            <span class="fw-light small text-center">
                            There are no courses on offer
                        </span>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

