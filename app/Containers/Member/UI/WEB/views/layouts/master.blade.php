<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{--<link rel="stylesheet" href="{{ URL::to('css/dashboard.css') }}">--}}
    @yield('styles')
    @include('member::partials.header')

</head>
<body>
@yield('content')
<script type="text/javascript">
    $(document).foundation();
</script>
{{--<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>--}}
@yield('scripts')
</body>

</html>