<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8"/>
    <title>Login - Desert Shooters</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("src/images/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("src/images/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("src/images/favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("src/images/site.webmanifest")}}">


    <!-- Mobile Specific Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css"/>
    <link
        rel="stylesheet"
        type="text/css"
        href="vendors/styles/icon-font.min.css"
    />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css"/>

</head>
<body class="header-dark sidebar-dark login-page">

<div class="login-header box-shadow">
    <div
        class="container-fluid d-flex justify-content-between align-items-center"
    >
        <div class="brand-logo">
            <a href="login.html">
                <img src="{{asset("src/images/ds-store-logo.svg")}}" alt=""/>
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center flex-wrap justify-content-center">

            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Register To DS - Store</h2>
                    </div>
                  <form action="{{ route('registration') }} " method="Post">
                        @if($errors->any())

                            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                 onclick=$(".alert").alert('close')>
                                {{$errors->first()}}

                            </div>

                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success" id="success">
                                {{ session()->get('message') }}
                            </div>
                            <script>
                                $(document).ready(function () {

                                    setTimeout(function () {
                                        $("#success").each(function () {
                                            $(this).slideUp()
                                        })
                                    }, 10000)

                                })
                            </script>
                        @endif
                        @if(session()->has('status'))
                            <div class="alert alert-success" id="success">
                                {{ session()->get('status') }}
                            </div>
                            <script>
                                $(document).ready(function () {

                                    setTimeout(function () {
                                        $("#success").each(function () {
                                            $(this).slideUp()
                                        })
                                    }, 10000)

                                })
                            </script>
                        @endif
                            <div class="input-group custom">
                            <input
                                name="name"
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Name"
                            />
                            <div class="input-group-append custom">
                                        <span class="input-group-text"
                                        ><i class="icon-copy dw dw-user1"></i
                                            ></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input
                                name="email"
                                type="email"
                                class="form-control form-control-lg"
                                placeholder="Email"
                            />
                            <div class="input-group-append custom">
                                        <span class="input-group-text"
                                        ><i class="icon-copy dw dw-user1"></i
                                            ></span>
                            </div>
                        </div>

                        <div class="input-group custom">
                            <input
                                name="password"
                                type="password"
                                class="form-control form-control-lg"
                                placeholder="Password"
                            />
                            <div class="input-group-append custom">
                                        <span class="input-group-text"
                                        ><i class="dw dw-padlock1"></i
                                            ></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        id="customCheck1"
                                    />
                                    <label class="custom-control-label" for="customCheck1"
                                    >Remember</label
                                    >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password">
                                    <a href="forgot-password.html">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <!--
                                    use code for form submit
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                -->
                                    @csrf
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                    {{--                                    <a--}}
                                    {{--                                        class="btn btn-primary btn-lg btn-block"--}}
                                    {{--                                        href="index.html"--}}
                                    {{--                                    >Sign In</a--}}
                                    {{--                                    >--}}
                                </div>
                                <div
                                    class="font-16 weight-600 pt-10 pb-10 text-center"
                                    data-color="#707373"
                                >
                                    OR
                                </div>
                                <div class="input-group mb-0">
                                    <a
                                        class="btn btn-outline-primary btn-lg btn-block"
                                        href="{{ route('login') }}"
                                    >Login To Existing Account</a
                                    >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>

</body>
</html>
