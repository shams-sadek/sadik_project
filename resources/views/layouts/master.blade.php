<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')

@show

    <!-- Styles -->
    {{ Html::style('css/normalize.css') }}

    @include('navbar')

    <div class="container">

        @include('flash::message')

        @yield('content')
    </div>

    @include ('layouts.footer')

    <!-- JavaScripts -->
    {!! Html::script('js/normalize.js') !!}

</body>
</html>