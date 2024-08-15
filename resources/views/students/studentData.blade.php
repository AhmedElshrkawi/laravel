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
<x-NAV>Students</x-NAV>
    <h1 class="text-bold w-50 mt-5 m-auto"><img src="{{ asset('uploads/students/' . $student->image) }} " style="width: 200px; border-radius: 30%; height: auto;"> {{$student->name}} </h1> 
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">gender</th>
            <th scope="col">email</th>
            <th scope="col">grade</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        {{-- @dd($student) --}}


            <tr>
                {{-- @dd($student) --}}
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->gender }}</td>
                <!-- <td>
                    @if($student->image)
                        <img src="{{ asset('uploads/students/' . $student->image) }}" alt="Student Image" style="width: 40px; border-radius: 50%; height: auto;">
                    @else
                        No Image
                    @endif
                </td> -->
                <td>{{ $student->email }}</td>
                <td>{{ $student->grade }}</td>
                <td>
                   <a href="{{route('students.index')}}">
                     <x-btn class="btn btn-warning">Back</x-btn>
                    </a>
                </td>
            </tr>


    </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
