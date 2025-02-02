<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
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
            <form method="post" action="{{ route('store')}}">
                @csrf
                <div class="mb-3 form-group">
                    <label for="studentName" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="studentName" placeholder="Enter student name" name='name'>
                </div>
                <div class="mb-3 form-group">
                    <label for="studentEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="studentEmail" placeholder="Enter email" name="email">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="mb-3 form-group">
                    <label for="studentPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="studentPhone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="mb-3 form-group">
                    <label for="studentCourse" class="form-label">Course Enrolled</label>
                    <input type="text" class="form-control" id="studentCourse" placeholder="Enter course name" name="course">
                </div>
                <div class="mb-3 form-group">
                    <label for="studentDOB" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="studentDOB" name="db">
                </div>
                <button type="submit" class="btn btn-submit"> SUBMIT </button>
              
             
            </form>
            <A href="{{route('wellcome')}}"><button type="submit" class="btn btn-submit mt-3">
            GO TO WELLCOME </button>  </A>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
