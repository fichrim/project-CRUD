<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplikasi Laravel Project</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>

    <h1 class="text-center mt-3"> Data Product dengan Laravel </h1>

    <div class="mt-3 container">
        @yield('konten')
    </div>


</body>
</html>