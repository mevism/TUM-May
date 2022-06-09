@extends('approval::layouts.backend')
@section('content')
    <!-- Page Content -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet" />
    <script src = "{{ asset('jquery.js') }}" ></script>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h5 fw-bold mb-2">
                        Approvals
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Location</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Approved
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content-force">
        <div class="row">
            Approved
        </div>
    </div>
    <!-- END Page Content -->

    <script src = "{{ asset('/js/build.js') }}"></script>
    <script>
        retrieveApplication({"status" : 1, "role" : 4});
    </script>
@endsection
