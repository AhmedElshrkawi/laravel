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
<x-NAV>Tracks</x-NAV>
<h1 class="text-bold w-50 mt-5 m-auto"> All Tracks Data</h1>
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">location</th>
            <th scope="col">Type</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tracks as $track)
            <tr>
              
                <td>{{ $track->id }}</td>
                <td>{{ $track->name }}</td>
                <td>{{ $track->location }}</td>
                <td>{{ $track->type }}</td>
                <td>
                    @if($track->image)
                        <img src="{{ asset('uploads/tracks/' . $track->image) }}" alt="track Image" style="width: 40px; border-radius: 50%; height: auto;">
                    @else
                        No Image
                    @endif
                </td>
                <td class="d-flex gap-2">
               
                    <a href="{{ route('tracks.view', $track->id) }}" class="btn btn-warning">View</a>

                   
                    <form action="{{ route('tracks.destroy', $track->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <x-btn type="submit" class="btn btn-danger">Delete</x-btn>
                    </form>

                    
                    <a href="{{ route('tracks.create', $track->id) }}" class="btn btn-info">Create</a>

                    
                    <a href="{{ route('tracks.edit', $track->id) }}" class="btn btn-warning">Update</a>
                </td>

            </tr>
        @endforeach



    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
