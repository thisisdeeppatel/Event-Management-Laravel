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
<form action="/dashboard/register" method="post">
    <input type="text" name="uname" placeholder="username" required />
    <input type="email" name="email" placeholder="email" required />
    <input type="password" name="pass" placeholder="password" required />
    <button type="submit">register</button>
    @csrf
</form>
</body>
</html>
