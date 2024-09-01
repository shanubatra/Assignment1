<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.styles')
    @yield('title')
</head>

<body>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Import Page</a>
                    <a href="{{ route('count') }}" class="nav-item nav-link">Count</a>
                </div>
            </div>
        </nav>
    </div>


    @yield('content')
    @include('layouts.scripts')
</body>

</html>
