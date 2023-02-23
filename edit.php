<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>UPDATE USER</title>
  </head>
  <body>
  <br><br>  
    <h1 class="text-center">EDIT EMPLOYEE DETAIL</h1>


    <?php
    var_dump($_GET);
    $conn = mysqli_connect('localhost','root','','employee');
    if(isset($_GET['edit'])){
        $edit_id=$_GET['edit'];
        $select= "SELECT * FROM empdetail WHERE empid='$edit_id'";
        $run=mysqli_query($conn,$select);
        $row_user=mysqli_fetch_array($run);
        //$empid= $row_user['empid'];
        $empname= $row_user['empname'];
        $empemail= $row_user['empemail'];
        $empmobile= $row_user['empmobile'];
        $empdepartment= $row_user['empdepartment'];
        $empcity= $row_user['empcity'];
        }
    
    ?>

    <div class="container mt-5">
    <form action="login.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">empid</label>
    <input type="text" class="form-control" value="<?php echo $empid;?>" placeholder="Enter Your id" name="empid">
</div> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empname</label>
    <input type="text" class="form-control" value="<?php echo $empname;?>" placeholder="Enter Your name" name="empname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empemail</label>
    <input type="text" class="form-control" value="<?php echo $empemail;?>" placeholder="Enter Your email" name="empemail">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empmobile</label>
    <input type="text" class="form-control" value="<?php echo $empmobile;?>" placeholder="Enter Your mobile" name="empmobile">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empdepartment</label>
    <input type="text" class="form-control" value="<?php echo $empdepartment;?>" placeholder="Enter Your department" name="empdepartment">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empcity</label>
    <input type="text" class="form-control" value="<?php echo $empcity;?>" placeholder="Enter Your city" name="empcity">
  </div>

  <input type="submit" name="edit-btn" class="btn btn-primary w-100"/>
</form>
</div>
  </body>
</html>

<?php
  echo "$edit_id";
  $conn = mysqli_connect('localhost','root','','employee');
  var_dump($_POST);
  if(isset($_POST['edit-btn'])){
  $eempid= $_POST['empid'];
  $eempname= $_POST['empname'];
  $eempemail= $_POST['empemail'];
  $eempmobile= $_POST['empmobile'];
  $eempdepartment= $_POST['empdepartment'];
  $eempcity= $_POST['empcity'];
    echo "$edit_id";
  $update="UPDATE employee SET empname='$empname',empemail='$empemail',empmobile='$eempmobile',empdepartment='$eempdepartment',empcity='$eempcity' WHERE empid='$edit_id'";
  $run_update=mysqli_query($conn,$update);
  if($run_update === true){
    echo "data has updated";
  }else{
    echo "not updated";
  }
  }


//  if(mysqli_connect_errno()){
//    echo "connection not found";
 // }else{
   // echo "connection successful";
//  }
 

?>
<a class="btn btn-primary" href="user.php">UPDATED USER DETAIL</a>


   
