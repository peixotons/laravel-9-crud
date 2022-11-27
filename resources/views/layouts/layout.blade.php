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

    <title>Contact Book Management</title>
</head>

<body class="">
    <div class="nav sticky-top bg-dark d-flex justify-content-between">
        <input type="checkbox" id="nav-check">
        <div class="nav-header ms-5">
            <div class="nav-title">
                Contact Book Management
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <div class="nav-links me-5">
            <ul>
                <li><a class="navbar-brand h1" href="{{ route('index') }}">Home</a></li>
                <li><a class="navbar-brand h1" href="{{ route('contacts') }}">Contacts</a></li>
            </ul>
        </div>
    </div>

    @yield('content')

    <footer class="fixed-bottom text-center text-lg-start bg-dark text-muted">
        <div class="text-center p-1 text-white" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold text-white" href="https://www.linkedin.com/in/gabrielpeixe/">Peixoto Dev</a>
            <a style="color:#00ACEE;" class="fa fa-twitter mx-1 text-decoration-none"
                href="https://twitter.com/Peixotons"></a>
            <a class="fa fa-linkedin mx-1 text-decoration-none" href="https://www.linkedin.com/in/gabrielpeixe/"></a>
            <a style="color:#c9510c;" class="fa fa-github mx-1 text-decoration-none"
                href="https://github.com/peixotons"></a>
        </div>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
