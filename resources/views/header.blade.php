<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Laravel</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        </ul>

    </div>
    </nav>
