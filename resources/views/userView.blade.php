<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>User Details</h1>
    <table class="table w-50 m-auto">
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $user['id'] }}</td>
            </tr>
            <tr>
                <th scope="row">Name</th>
                <td>{{ $user['name'] }}</td>
            </tr>
            <tr>
                <th scope="row">Age</th>
                <td>{{ $user['age'] }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('/users') }}" class="btn btn-primary">Back to Users</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>