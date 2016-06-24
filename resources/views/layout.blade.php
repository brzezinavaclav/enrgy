<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ URL::asset('css/app.min.css') }}" rel="stylesheet">
    <title></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">
                Energy auction
            </a>
        </div>
        <form class="navbar-form navbar-right">
            @if (Auth::check())
                <ul class="nav navbar-nav ">
                    <li class="dropdown">
                        <ul class="dropdown-menu">
                            <li><a href="#">skgdhsjdk</a></li>
                        </ul>
                    </li>
                </ul>
            @else
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#signInModal">Sign in</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUpModal">Sign up</button>
            @endif
        </form>
        <div class="navbar-right">
            <ul class="nav navbar-nav ">
                <li><a href="">About</a></li>
                <li><a href="">Something</a></li>
                <li><a href="">Something</a></li>
                <li><a href="">Something</a></li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')


<script src="{{ URL::asset('js/app.min.js') }}"></script>

</body>
</html>