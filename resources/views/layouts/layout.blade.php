<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


    @yield('head')
</head>
<body>
    <header class="content-wrapper">
        <div class="content-wrapper">
            <h1>Sweets Emporium</h1>
            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('sweet') }}">Sweets</a>
                <a href="{{ route('create') }}">Add sweet</a>
            </nav>

            <div class="link-icons">
                <form method="post" action="{{ URL(route('logout'))}}">
                    @csrf
                        <button class="fas fa-sign-out-alt" style="border: none; background: transparent;" />
                </form>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="content-wrapper">
            <p>&copy; 2020, Sweets Emporium</p>
        </div>
    </footer>
</body>
</html>