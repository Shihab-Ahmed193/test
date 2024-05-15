<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
  <center>
    <h1> Record Page </h1>
  </center>

  @if(Session::has('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('message') }} -->
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif







  <table class="table">

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Roll</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        <th scope="col">Created Date</th>
        <th scope="col"> </th>
        <th><a href="{{ route("students.create") }}"> <button class="btn btn-outline-info">CREATE NEW</button> </a></th>

      </tr>
    </thead>
    <tbody>
      @foreach($records as $records)
      <tr>
        <th>{{$records->id}} </th>
        <td>{{$records->name}} </td>
        <td>{{$records->email}} </td>
        <td>{{$records->roll}} </td>
        <td>{{$records->phone}} </td>
        <td>{{$records->address}} </td>
        <td> <img src="{{ asset('storage/' . $records->image) }}" alt="Profile Image" width="50">
        </td>


        <td>{{$records->created_at}}</td>
        <td><a href="edit_record/{{$records->id}}"> <button class="btn btn-primary">Edit</button> </a></td>
        <td><a href="delete_record/{{$records->id}}"> <button class="btn btn-danger">Delete</button> </a></td>

      </tr>
      @endforeach
    </tbody>
  </table>

<h> Test </h1>


</body>

</html>