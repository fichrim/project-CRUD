<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aplikasi Laravel Project</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}">
</head>
<body>

<h1 class="text-center mt-3"> Selamat Datang di Laravel </h1>
<div class="text-center">
<a class="btn btn-sm btn-primary" href="{{ route('product.tampil')}}"> Kelola Data</a>
</div>
</body>
</html>