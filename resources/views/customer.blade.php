<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Add Customer</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1 class="bg-success text-center m-3 p-3 text-white">Workflow System</h1>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="text-center">Add Customer's Details</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{url('/import-data')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="Enter your name" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="lastName" placeholder="Enter your surname" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input type="date" class="form-control" name="birthDate" placeholder="Enter your date of birth"nrequired="">
                        </div>
                        <div class="form-group">
                            <label for=""> Upload Excel File </label>
                            <input type="file" class="form-control" name="excelFile" required="">
                        </div>

                        <div class="form-group">
                        @csrf
                            <input type="submit" class="btn btn-success" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>


