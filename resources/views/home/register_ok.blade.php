
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration OK</title>
    @include("static")
</head>
<body class="container">
     <!-- NAVBAR -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container" >
            <a class="navbar-brand" href="#">Saurashtra University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url("/")}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/certificate">Get Certificate</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>




        <div class="alert alert-success mt-4" role="alert">
            Registration Successful
          </div>



    <div class="container d-flex justify-content-center mt-4">
        <div class="card col-md-6">
            <div class="card-header text-center">
              <h1> Your Registration ID:</h1>
            </div>
            <div class="card-body text-center">

              <h1>{{$reg_id}}</h1>

            </div>
        </div>

        <br>

        </div>
        <div class="d-flex justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="text-danger">Please Keep this registration in in safe place or make screenshot. Otherwise you will not be able to
                    generate the certificate. For getting certificate, Registration id is required.
                </h3>
            </div>
        </div>



</body>
</html>
