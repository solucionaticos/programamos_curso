<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>Login para ingresar al sistema</h1>

    <form action="{{ route('user.loginValidate') }}" method="POST">
        @csrf
        Correo: <input type="text" name="email"> <br>
        Clave: <input type="text" name="password"> <br>
        <button type="submit">Ingresar</button>
    </form>

</body>
</html>
