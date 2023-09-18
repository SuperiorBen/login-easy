<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <main class="container m-auto d-flex justify-content-center align-items-center flex-column">
        <h1 style="margin-top:2em;">Login</h1>
        <form method="post" action="{{ route('inicio-sesion') }}" style="width: 20em; margin-top:1em;">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Recuerdame</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </main>

</body>

</html>