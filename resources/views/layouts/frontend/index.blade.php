<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.partials.head')
<body>
    @include('layouts.frontend.partials.flash')
    @yield('content')

    @include('layouts.frontend.partials.footer')
    @yield('js')
</body>
</html>