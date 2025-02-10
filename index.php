<?php include "connect.php";


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];

    
  $insert = "insert into `person information` (username,email,phone,location) values ('$name','$email','$phone','$location')";

  $result = mysqli_query(mysql: $database, query: $insert);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    html{
      width: 100%;
      height: 100%;
    }
    form{
      background-color: rgb(186, 221, 227);
      border: 1.5px solid rgb(17, 63, 15);
    }
    .input, h3{
      border: 1.5px solid rgb(17, 63, 15);
    }
    h3{
      background-color:  rgb(186, 221, 227);
      color:  rgb(17, 63, 15);
      border-bottom: none;
    }
    .btn-submit{
      background-color: rgb(17, 63, 15);
      color: white;
    }
    .btn-submit:hover{
      background-color: white;
      color: rgb(17, 63, 15);
      border: 0.5px solid rgb(17, 63, 15);
    }
    .btn-outline{
      border:  1.5px solid rgb(17, 63, 15);
      color:  rgb(17, 63, 15);
      background-color: white;
    }
     .btn-outline:hover{
      background-color: rgb(17, 63, 15);
      color: white;
      border: rgb(186, 221, 227);
     }
     a{
      color:rgb(17, 63, 15) ;
     }
     .btn-outline:hover a{
      color: white;
     }
  </style>
</head>
<body class="w-100 h-100 d-flex align-items-center row">
    <form action = "index.php" method = "post" class="container col-md-7 col-lg-6 py-4 px-4 rounded-3 position-relative">

    <h3 class="position-absolute translate-middle-y top-0 p-2 fs-4 rounded-1 rounded-bottom-0">Personal Details</h3>

    <!-- Name Field -->
    <label for="name" class="form-label text-info-emphasis fs-4 fw-bold mt-4">Name <span class="fw-bold text-danger">*</span></label>
    <input required class=" input form-control form-control-lg mb-3 rounded-5" type="text" placeholder="Enter your Name" name = "name" autocomplete="off" autofill="off">

     <!-- Email Field -->
    <label for="email" class="form-label text-info-emphasis fs-4 fw-bold">Email <span class="fw-bold text-danger">*</span></label>
    <input required class=" input form-control form-control-lg rounded-5 mb-3" type="text" placeholder="Enter your Email" name = "email" autofill="off">

     <!-- Phone -->
    <label for="phone" class="form-label text-info-emphasis fs-4 fw-bold">Phone <span class="fw-bold text-danger">*</span></label>
    <input required class="input form-control form-control-lg rounded-5 mb-3" type="number" placeholder="Enter your Mobile" name = "phone" autofill="off">

     <!-- location -->
    <label for="location" class="form-label text-info-emphasis fs-4 fw-bold">City <span class="fw-bold text-danger">*</span></label>
    <input required class="input form-control form-control-lg rounded-5 mb-5" type="text" placeholder="Enter your location" name = "location" autofill="off">

    <div class="btn-container w-100 row justify-content-center">
    <button class="col-3 text-center d-flex align-items-center justify-content-center me-2 btn btn-submit fw-bold fs-6 px-5 py-2" type ="submit" name="submit">Submit</button>
    <button class="col-3 me-2 btn btn-outline fw-bold fs-6 px-5 py-2  d-flex align-items-center justify-content-center">
      <a class="text-decoration-none text-hover-light" href="display.php">Details</a></button>
    <button class="col-3 btn btn-outline fw-bold fs-6 px-5 py-2  d-flex align-items-center justify-content-center">Insta</button>
    </div>
    </form>
</body>
</html>