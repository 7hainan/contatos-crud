<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{$title}} | 
        @endisset
        {{config('app.name')}}
    </title>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">{{$title}} - CRUD</a>
        </div>
    </nav>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
<script src="{{asset('site/bootstrap.bundle.min.js')}}"></script>
</html>