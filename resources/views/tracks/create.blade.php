<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Track</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<x-NAV>Tracks</x-NAV>
    <h1 class="text-center text-bold m-5">Create New Track  </h1>
    {{--
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form class=" border p-2 bordered w-75 m-auto" method="post" action="{{route('tracks.store')}}" enctype="multipart/form-data" >
        @csrf
      
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Name </label>
          <input name="name" type="Name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp">

        </div>
    
        @error('location')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputLocation1" class="form-label">Location</label>
          <input name="location" type="text" class="form-control" id="exampleInputLocation1" aria-describedby="LocationHelp">
          
        </div>
        

        @error('coursesnumber')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputCN1" class="form-label">Courses Number </label>
          <input name="coursesnumber" type="number" class="form-control" id="exampleInputCN1" aria-describedby="CNHelp">
        </div>
        

        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputType1" class="form-label">Type </label>
          <input name="type" type="text" class="form-control" id="exampleInputType1" aria-describedby="TypeHelp">
        </div>

        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputImage1" class="form-label">Image </label>
          <input name="image" type="file" class="form-control" id="exampleInputImage1" aria-describedby="ImageHelp">
        </div>
      

        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
          <label for="exampleInputphone1" class="form-label">phone </label>
          <input name="phone" type="text" class="form-control" id="exampleInputphone1" aria-describedby="phoneHelp">
        </div>
     


        <button type="submit" class="btn btn-primary">Create</button>
      </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
