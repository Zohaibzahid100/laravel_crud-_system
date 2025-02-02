<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
    
</head>
<style>
    body {
    /* background: rgb(79,209,190);
    background: linear-gradient(90deg, rgba(79,209,190,1) 0%, rgba(173,105,209,1) 50%, rgba(255,183,82,1) 100%); */
    background-color: rgb(0 60 94);
    font-family: Arial, sans-serif;
}
.form-container {
    max-width: 600px;
    margin: 50px auto;
    background: white;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}
.form-container:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
}
.form-title {
    font-size: 1.75rem;
    color: #343a40;
    text-align: center;
    font-weight: bold;
    margin-bottom: 15px;
}
.form-group label {
    font-weight: 600;
    color: #495057;
}
.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
.btn-submit {
    background-color: #007bff;
    color: white;
    font-weight: bold;
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
}
.btn-submit:hover {
    background-color: #0056b3;
}
.form-text {
    color: #6c757d;
}
</style>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-title">Student Details Form</div>
          
             @if($errors->any())
           @foreach($errors->all() as $error)
         <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
         @endforeach
         @endif
            <form method="post" action="{{ route('update', $student->id)}}">
                @method('put')
                @csrf
                <div class="mb-3 form-group">
                    <label for="studentName" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="studentName" placeholder="Enter student name" name='name' value='{{$student->studnet_name}}'>
                </div>
                <div class="mb-3 form-group">
                    <label for="studentEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="studentEmail" placeholder="Enter email" name="email" value='{{$student->studnet_email}}'>
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="mb-3 form-group">
                    <label for="studentPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="studentPhone" placeholder="Enter phone number" name="phone" value='{{$student->studnet_phone}}'>
                </div>
                <div class="mb-3 form-group">
                    <label for="studentCourse" class="form-label">Course Enrolled</label>
                    <input type="text" class="form-control" id="studentCourse" placeholder="Enter course name" name="course" value='{{$student->studnet_course_enrolls}}'>
                </div>
                <div class="mb-3 form-group">
                    <label for="studentDOB" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="studentDOB" name="db" value='{{$student->studnet_db}}'>
                </div>
                <button type="submit" class="btn btn-submit"> UPDATE </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
