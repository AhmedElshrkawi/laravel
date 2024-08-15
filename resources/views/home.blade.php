<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<x-NAV>Home</x-NAV>
    <div class="text-center m-5">
        <h1 class="p-5">Welcome</h1>
        <div class="text-center m-5">
            <a href="{{ route('students.index') }}" class="btn btn-warning m-3">All Students</a>
            <a href="{{ route('tracks.index') }}" class="btn btn-info m-3">All Tracks</a>
            <a href="{{ route('courses.index') }}" class="btn btn-danger m-3">All Courses</a>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
