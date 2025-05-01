<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('admin.include.style')
    <title>Admin - @yield('title')</title>
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        @include('admin.include.header')
        <!--end top header-->

        <!--start sidebar -->
        @include('admin.include.left-sidebar')
        <!--start sidebar -->

        <!--start content-->
        <main class="page-content">

            @yield('content')

        </main>
        <!--end page main-->


        @include('admin.include.footer')

    </div>
    <!--end wrapper-->


    @include('admin.include.script')


</body>

</html>
