<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>USER VIEW</h2>
    <?php
    $conn = mysqli_connect('localhost','root','','employee');
    if(isset($_GET['del'])){
        $del_id=$_GET['del'];
    $delete= "DELETE FROM empdetail WHERE empid='$del_id'";
    $run_delete=mysqli_query($conn,$delete);
    if($run_delete===true){
        echo "successfully deleted";
    }else{
        echo"failed in deletion";
    }

    }
    ?>
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>empid</th>
        <th>empname</th>
        <th>empemail</th>
        <th>empmobile</th>
        <th>empdepartment</th>
        <th>empcity</th>
        <th>delete</th>
        <th>Update</th>

      </tr>
    </thead>
    <tbody>
    <?php
    $conn = mysqli_connect('localhost','root','','employee');
    $select= "SELECT * FROM empdetail";
    $run=mysqli_query($conn,$select);
    while($row_user=mysqli_fetch_array($run)){
    $empid= $row_user['empid'];
    $empname= $row_user['empname'];
    $empemail= $row_user['empemail'];
    $empmobile= $row_user['empmobile'];
    $empdepartment= $row_user['empdepartment'];
    $empcity= $row_user['empcity'];
  
    ?>
      <tr>
        <td><?php echo $empid ; ?></td>
        <td><?php echo $empname ; ?></td>
        <td><?php echo $empemail ; ?></td>
        <td><?php echo $empmobile ; ?></td>
        <td><?php echo $empdepartment ; ?></td>
        <td><?php echo $empcity ; ?></td>
        <td><a class="btn btn-danger" href="user.php?del=<?php echo $empid;?>">Delete</a></td>
        <td><a class="btn btn-success" href="edit.php?edit=<?php echo $empid;?>">Update</a></td>
      </tr>
      <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>