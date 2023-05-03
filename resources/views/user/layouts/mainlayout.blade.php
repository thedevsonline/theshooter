<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>


    @include('user.layouts.partials.head')
</head>
<body class="body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
<div id="page_preloader"></div>
<!-- Body wrap -->
<div class="body_wrap">
    <!-- Page wrap -->
    <div class="page_wrap">
        <!-- Header -->
        @include('user.layouts.partials.header')
        <!-- /Header Mobile -->
        @yield('content')
    </div>
    <!-- /Page wrap -->
</div>
<!-- /Body wrap -->

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>


@include('user.layouts.partials.footer-scripts')
@section("scripts")
@show


</html>
