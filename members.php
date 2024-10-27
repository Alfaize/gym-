<?php
include 'config.php';
if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $phone = $_REQUEST["phone"];
    $coach = $_REQUEST["coach"];

    

    $ins = "INSERT INTO members (id,name,date,phone,coach) VALUES ('$id','$name','$date','$phone','$coach')";
        $query1 = mysqli_query($con, $ins);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   

<!-- nav bar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin-login.php"><img src="img/TT.png" alt=" "> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Gym management </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="billing.php">billing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="coach.php">coach</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">members</a>
        </li>
  
        
      </ul>
    </div>
  </div>
</nav>
<!--nav bar ends-->

<!--form starts here-->
<div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">MEMBERS</h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">MemberID</label>
            <input type="number" class="form-control" name="id" >
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name">
          </div>
  
        
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" name="date">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Phone Number</label>
          <input type="text" class="form-control" name="phone">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Assigned Coach</label>
          <input type="text" class="form-control" name="coach">
        </div>
        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
   </section>
<!--form ends-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>