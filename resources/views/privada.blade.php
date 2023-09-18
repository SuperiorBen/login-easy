<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a style="text-decoration: none; color:#fff;" class="navbar-brand btn btn-dark  float-end" 
            href="{{ route('logout') }}">Logout</a>
        </div>
    </nav>

    <h1>Privada de @auth  {{ Auth::user()->name }}  @endauth</h1>
</body>

</html>