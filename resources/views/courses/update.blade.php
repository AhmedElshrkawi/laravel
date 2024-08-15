<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<x-NAV>Update Course</x-NAV>
    <h1 class="text-center text-bold m-5">Update Course {{$course->id}}</h1>

    <form class="border p-2 bordered w-75 m-auto" method="post" action="{{ route('courses.update', $course->id) }}">
        @csrf
        @method('PUT')
      
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName1" value="{{ old('name', $course->name) }}">
        </div>

        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputDescription1" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputDescription1" value="{{ old('description', $course->description) }}">
        </div>

        @error('totalgrade')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputTotalGrade1" class="form-label">Total Grade</label>
            <input name="totalgrade" type="number" class="form-control" id="exampleInputTotalGrade1" value="{{ old('totalgrade', $course->totalgrade) }}">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputTrackId1" class="form-label">Track ID</label>
            <select name="track_id" class="form-control">
                @foreach ($tracks as $track)
                    <option value="{{ $track->id }}" {{ $course->track_id == $track->id ? 'selected' : '' }}>
                        {{ $track->id }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
