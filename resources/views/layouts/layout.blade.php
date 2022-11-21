<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="https://media.flaticon.com/dist/min/img/favicon.ico">

    <!-- FontAwesome/Fonts/Bootstrap/CSS -->
    <script src="https://kit.fontawesome.com/9ef60e0481.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title>Contact Book</title>
</head>

<body class="">
    <header class="p-2 mb-2 bg-dark">
        <nav class="container navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand fw-bold ms-5 text-white" href="{{ route('index') }}">Contact Book Management</a>
            <button class="navbar-toggler text-white bg-white" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link fw-bold p-1 me-5 text-white" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold p-1 me-5 text-white" href="{{ route('contacts') }}">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="fixed-bottom text-center text-lg-start bg-dark text-muted">
        <div class="text-center p-1 text-white" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold text-white" href="https://www.linkedin.com/in/gabrielpeixe/">Peixoto Dev</a>
        </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
