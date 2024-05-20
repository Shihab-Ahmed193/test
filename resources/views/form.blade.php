<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <center>
   <h1>From Creation</h1> 
  </center>
<div class="container">   
<form action="{{ route("students.store")}}" method="POST" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label for="exampleInputEmail1">User name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" value="{{ old('name') }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email"  class="form-control" value="{{ old('email') }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputRoll1">Roll</label>
    <input type="text" name="roll"  class="form-control" value="{{ old('roll') }}" id="exampleInputRoll1" placeholder="roll">
    @error('roll')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div> 

  <div class="form-group">
    <label for="exampleInputPhone1">Phone</label>
    <input type="text" name="phone"  value="{{ old('phone') }}" class="form-control" id="exampleInputPhone1" placeholder="Phone">
    @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputAddress1">Address</label>
    <input type="text" name="address"  value="{{ old('address') }}" class="form-control" id="exampleInputAddress1" placeholder="Address">
    @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
  <label for="exampleInputImage1">Image</label>
    <input type="file" class="form-control"  name="image" id="exampleInputImage1">

    @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>  

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div> 

</body>
</html>