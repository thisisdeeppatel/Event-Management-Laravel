<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @include("static")
</head>
<body>
    {{$err}} <br>
<form action="/dashboard/login" method="post">
    <input type="text" name="uname" placeholder="username" required />
    <input type="password" name="pass" placeholder="password" required />
    <button type="submit">Login</button>
    @csrf
</form>
</body>
</html>
