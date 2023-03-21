<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('includes.styles')

</head>

<body>
    <!-- navbar -->
    @include('includes.navbar')
    <!-- end navbar -->

    @yield('content')

    <!-- footer -->
    @include('includes.footer')
    <!-- end footer -->

    @include('includes.scripts')

</body>

</html>