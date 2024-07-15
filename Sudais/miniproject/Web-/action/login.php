<?php
if(isset($_POST['login']))
{
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="e-commerce";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn -> connect_errno){
        echo "Failed to connect My SQL". $conn -> connect_error;
        exit();
    }
    else{
       $email=$_POST['user_email'];
       $pswd=$_POST['user_pswd'];
       $check_query="SELECT * FROM `users` WHERE `email`='$email' and password='$pswd' and status=1";
       //echo $check_query;
      $result=mysqli_query($conn,$check_query); 
      $row_count=mysqli_num_rows($result);
      if($row_count>0){
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['user_id']=$row['id'];
         echo "<script>
         alert('Login succesfully!');
        window.location='index.php';
        </script>";
      }
      else{
        echo "<script>
         alert('INvalid Email OR PAssword!');
        </script>";
      }
       
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Login form</h2>
  <form  method="post">
    <div class="mb-3">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="stock" placeholder="Enter email" required name="user_email">
    </div>
    <div class="mb-3">
      <label for="pwd">PAssword:</label>
      <input type="password" class="form-control" id="price" placeholder="Enter Password" name="user_pswd">
    </div>

    
    
    <button type="submit" class="btn btn-primary" name="login">Submit</button>
  </form>
</div>

</body>
</html>
