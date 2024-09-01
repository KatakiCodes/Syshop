<!DOCTYPE html>
<html lang="Pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    @include('../includes/navBar')
    @yield('conteudo')
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    @stack('css')
    @include('../includes/signUpModal')
    @include('../includes/loginModal')
</body>
</html>