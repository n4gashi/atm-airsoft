<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ATM &#124; CQB Operation Unit</title>
    {{ HTML::style('css/app.css') }}
</head>
<body>

    @include('layout.navigation')

    <div id="app-page-title">
        @section('title')
        @show
    </div>

    @section('body')
        <div id="content" class="wrapper">
            @yield('content')
        </div>
    @show
</body>
</html>