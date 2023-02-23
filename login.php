<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login page</title>
  </head>
  <body>
  <br><br>  
    <h1 class="text-center">Add New Employee</h1>
    <div class="container mt-5">
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">empid</label>
    <input type="text" class="form-control" placeholder="Enter Your id" name="empid">
</div>  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empname</label>
    <input type="text" class="form-control" placeholder="Enter Your name" name="empname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empemail</label>
    <input type="text" class="form-control" placeholder="Enter Your email" name="empemail">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empmobile</label>
    <input type="text" class="form-control" placeholder="Enter Your mobile" name="empmobile">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empdepartment</label>
    <input type="text" class="form-control" placeholder="Enter Your department" name="empdepartment">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empcity</label>
    <input type="text" class="form-control" placeholder="Enter Your city" name="empcity">
  </div>

  <input type="submit" name="insert-btn" class="btn btn-primary w-100"/>
</form>
</div>
  </body>
</html>

<?php
  $conn = mysqli_connect('localhost','root','','employee');
  if(isset($_POST['insert-btn'])){
  $empid= $_POST['empid'];
  $empname= $_POST['empname'];
  $empemail= $_POST['empemail'];
  $empmobile= $_POST['empmobile'];
  $empdepartment= $_POST['empdepartment'];
  $empcity= $_POST['empcity'];

  $insert="INSERT INTO empdetail(empid,empname,empemail,empmobile,empdepartment,empcity) VALUES('$empid','$empname','$empemail','$empmobile','$empdepartment','$empcity')";
  
  $run_insert=mysqli_query($conn,$insert);
  if($run_insert === true){
    echo "data has been inserted";
  }else{
    echo "not inserted";
  }
  }


//  if(mysqli_connect_errno()){
//    echo "connection not found";
 // }else{
   // echo "connection successful";
//  }
 

?>

<a class="btn btn-primary" href="user.php">UPDATED USER DETAIL</a>
   
