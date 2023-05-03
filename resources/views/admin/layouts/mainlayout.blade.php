<!DOCTYPE html>
<html lang="en">
<head>



@include('admin.layouts.partials.head')
</head>
<style type="text/css">
    table{
        width: 100%;
    }
  .thP {
       width: 10%;
       
    }


.short_description {
  width: 250px;
  white-space: pre-wrap;
}

</style>

<body class="header-dark sidebar-dark">
@include('admin.layouts.partials.header')
@include('admin.layouts.partials.nav')

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
@yield('content')
    </div>
</div>
@include('admin.layouts.partials.footer-scripts')
@section("scripts")
@show
</body>
</html>
