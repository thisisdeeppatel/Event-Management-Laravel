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
    <h3 style="color:red; font-weight:bold; text-align:center;">{{$err}}</h3> <br>

    <div class="mt-5" style="margin-bottom:50px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="m-4">Login for the Dashboard</h2>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/login" method="post">
                          @csrf
                            <div class="form-group p-2">
                                <strong>Username:</strong>
                                <input type="text" class="form-control" name="uname" placeholder="Enter Username" required>
                            </div>
                            <div class="form-group p-2">
                                <strong>Password:</strong>
                                <input type="password" class="form-control" name="pass"  placeholder="Enter Password" required>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Login</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>

    {{-- <input type="text" name="uname" placeholder="username" required />
    <input type="password" name="pass" placeholder="password" required />
    <button type="submit">Login</button> --}}


</body>
</html>
