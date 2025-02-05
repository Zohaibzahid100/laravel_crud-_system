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
<div class="container">
    <h1 class='mt-5'  style='color:white;text-align:center; font-weight:bolder;'>
    STUDENT TRASHED DATA 
    </h1>
</div>
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
  <div class='container mt-4' style='text-align:center;'>
   <button class='btn btn-dark ' ><a href="{{ route('read')}}"  style='color:white; font-weight:bolder;text-decoration:none; font-size:30px'> Go to read</a></button>
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
      <th scope="col">Restore</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach($student as $students)
    <trs>
        <td>{{ $students->studnet_name}}</td>
        <td>{{ $students->studnet_email}}</td>
        <td>{{ $students->studnet_phone}}</td>
        <td>{{ $students->studnet_course_enrolls}}</td>
        <td>{{ $students->studnet_db}}</td>
        <td>  <a href="{{route('restore', $students->id)}};"><button class='btn btn-success'> Restore </button></a></td>
        <td >
        <form method='post' action="{{ route('forcdelete', $students->id) }}">          
          @csrf
          @method('DELETE')
          <button class='btn btn-danger '>Permenent delete</button>
        </form>
          <div style='display:flex; padding2rem' >
       
      
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
    
</body>
</html>