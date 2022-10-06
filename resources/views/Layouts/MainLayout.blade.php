<!DOCTYPE html>
<html lang="en">

<head>
 @yield('tittle')
 @include('includes.head')
 
</head>

<body>
    <!-- Start Top Nav -->
    @include('includes.nav')
    <!-- Close Top Nav -->

    <!-- Header -->
    @include('includes.header')
    <!-- Close Header -->

    @yield('body')


    <!-- Start Footer -->
    @include('includes.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    @include('includes.scripts')
    <!-- End Script -->

    @yield('Slider_Script')


</body>
