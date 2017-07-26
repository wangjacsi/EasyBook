<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title') </title>

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/plugin.css') }}" />
    @yield('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}" />

</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

        <!-- Small Chat -->
        @include('layouts.smallchat')
        <!-- Right Sidebar -->
        @include('layouts.rightsidebar')
    </div>
    <!-- End wrapper-->


<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ URL::asset('js/plugin.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('js/admin.js') }}" type="text/javascript"></script>

@yield('scripts')



</body>
</html>
