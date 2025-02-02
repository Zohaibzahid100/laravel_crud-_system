<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  
  *{
    margin: 0%;
    padding: 0%;
    box-sizing:border-box;
  }
  body{
    background-color:rgb(0 60 94);
    font-family: Arial, sans-serif;
  }
  .hello{
    text-align:center;
    margin-bottom:3rem;
  }
</style>
<body>
  <div class="container mt-5">
  @if(session()->has('success'))
            <div class="alert alert-success hello" role="alert">
             {{session()->get('success')}}
            </div>
            @endif
            @if($errors->any())
           @foreach($errors->all() as $error)
         <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
         @endforeach
         @endif
  </div>
  <div class="container-fluid" style='padding:30px;' >
<table class="table " style='border:1px solid black ;' >
  <thead class="bg-dask ">
    <tr >
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Course Enrolls</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
        <td>{{ $student->studnet_name}}</td>
        <td>{{ $student->studnet_email}}</td>
        <td>{{ $student->studnet_phone}}</td>
        <td>{{ $student->studnet_course_enrolls}}</td>
        <td>{{ $student->studnet_db}}</td>
        <td>  <a href="{{route('edit' , $student->id)}}"><button class='btn btn-primary'> update </button></a></td>
        <td >
          <div style='display:flex; padding2rem' >
          <form method='post' action='{{ route("deletedata", $student->id)}}'>          
          @csrf
          @method('delete')
          <button class='btn btn-danger '>delete</button>
        </form>
      
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    
</body>
</html>