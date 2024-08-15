<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<x-NAV>Students</x-NAV>
    <h1 class="text-center text-info m-5">Update Student {{$student->id}}</h1>

    <form class="border p-2 bordered w-75 m-auto" method="post" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName1" value="{{ old('name', $student->name) }}">
        </div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="{{ old('email', $student->email) }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        @error('grade')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputGrade1" class="form-label">Grade</label>
            <input name="grade" type="number" class="form-control" id="exampleInputGrade1" value="{{ old('grade', $student->grade) }}">
        </div>

        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputImage1" class="form-label">Image</label>
            <input name="image" type="file" class="form-control" id="exampleInputImage1">
        </div>

        @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputAddress1" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" id="exampleInputAddress1" value="{{ old('address', $student->address) }}">
        </div>

        @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label class="form-check-label" for="flexRadioDefault1">Gender</label>
        <div class="form-check">
            <input name="gender" class="form-check-input" type="radio" id="flexRadioDefault1" value="male" {{ old('gender', $student->gender) == 'male' ? 'checked' : '' }}>
            <label class="form-check-label" for="flexRadioDefault1">Male</label>
        </div>
        <div class="form-check">
            <input name="gender" class="form-check-input" type="radio" id="flexRadioDefault2" value="female" {{ old('gender', $student->gender) == 'female' ? 'checked' : '' }}>
            <label class="form-check-label" for="flexRadioDefault2">Female</label>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
