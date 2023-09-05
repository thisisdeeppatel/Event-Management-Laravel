<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Certificate</title>
    @include('static')
</head>
<body>
    <div class="container mt-5" style="margin-bottom:50px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Download Authentic Certificate:</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/")}}/certificate" method="post">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="number" class="form-control" name="reg_id" value="{{$reg_id}}" placeholder="Enter Registration ID" required>
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary mt-2">Generate Certificate</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</body>
</html>
