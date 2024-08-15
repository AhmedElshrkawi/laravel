<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<x-NAV>Courses</x-NAV>
    <h1 class="text-bold w-50 mt-5 m-auto"> course  {{$course->id}} </h1>
    <table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Total Grade</th>
            <th scope="col">Track</th>
      
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        
            <tr>
              
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->totalgrade }}</td>
                <td>{{ $course->track->name }}</td>
                
                
                <td>
                   
                   <a href="{{route('courses.index',$course->id)}}"> <button class="btn btn-warning">Back</button></a>
                   

                </td>
            </tr>
        



    </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
