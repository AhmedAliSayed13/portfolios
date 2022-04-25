<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
    @yield('css')
</head>

<body>

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- /Sidebar -->



    @yield('content')


    @include('layouts.script')
    @yield('js')

</body>

</html>