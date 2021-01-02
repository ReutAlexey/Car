<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Bootstrap--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Styles -->

</head>
<body>
<nav
    class="navbar navbar-expand-lg navbar-light bg-light"
>
    <a
        class="navbar-brand"
        href="#"
    >Navbar</a>
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span
            class="navbar-toggler-icon"
        ></span>
    </button>
    <div
        class="collapse navbar-collapse"
        id="navbarNav"
    >
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a
                    class="nav-link"
                    href="/"
                >Car list
                    <span
                        class="sr-only"
                    >(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    href="{{ route('search-form') }}"
                >Page Search</a>
            </li>
        </ul>
    </div>
</nav>


<div
    id="app"
    class="container-lg mt-5"
>
    <div>
        @yield('search')
    </div>
    @yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
