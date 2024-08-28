<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?v=' . time()) }}">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card bg-white rounded-4 p-3 border shadow" style="width: 700px; height: 300px">
            <h1 class="text-center mb-4">DASHBOARD</h1>
            <div class="d-flex flex-column align-items-center mt-4">
                <a class="btn btn-primary mb-3" style="width: 100%;" href="{{ route('location.tampil') }}">Kelola data location</a>
                <a class="btn btn-primary" style="width: 100%;" href="{{ route('employee.tampil') }}">Kelola data employee</a>
            </div>
        </div>
    </div>
</body>
</html>