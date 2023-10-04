
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

    @include("home.navbar")

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
