@extends('layouts.simple')

@section('content')

    <style>
        .img{
            background-image: url("/media/photos/photo33@2x.jpg");
            background-size: cover;

        }
        .block{
            background-color: rgb(0,0, 0,0.5);
        }
        .form-check-label{
            color: whitesmoke;
        }
    </style>
    <div id = "page-container">

        <!-- Main Container -->
        <main class="img" id="main-container">
            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-rounded mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title"> {{ config('app.name') }} | Sign in</h3>
                                    <div class="block-options">
                                        <a class="btn-block-option fs-sm" href="">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                                        <h1 class="h2 mb-1"></h1>
                                        <p class="fw-medium text-muted">
                                        </p>
                                        <form class="js-validation-signin" action="{{ route('user.login') }}" method="POST">
                                            @csrf
                                            <div class="py-3">
                                                <div class="mb-4">
                                                    <label class="form-label" style="color: snow !important;">User ID</label>
                                                    <input type="text" class="form-control form-control-alt form-control-lg" name="username">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" style="color: snow !important;">Password</label>
                                                    <input type="password" class="form-control form-control-alt form-control-lg" name="password">
                                                </div>
                                                <div class="mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="login-remember" name="login-remember">
                                                        <label class="form-check-label" for="login-remember">Remember Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12 col-xl-12">
                                                    <button type="submit" class="btn w-100 btn-alt-primary">
                                                        <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="block-options">
                                            <a class="btn-block-option fs-sm" style="color: snow;" href="{{ route('application.register') }}"> Seeking new admission? Sign up here </a>
                                        </div>
                                        <!-- END Sign In Form -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Sign In Block -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
@endsection
