<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Project - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"> </script>
</head>
<body>
    @section('sidebar')
        @yield('defaultnavsidebarsection', View::make('layouts.defaultnavsidebar'))
    @show

    <div class="container">
        @yield('content')
        <button class="btn btn-lg btn-success">hello</button>
    </div>
    
    <script>
        var app = new Vue({
            el: "#app",
            data: {
                data: @json($data)
            }
        })
    </script>
</body>
</html>