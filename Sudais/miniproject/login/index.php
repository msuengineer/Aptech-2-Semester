<?php
if(isset($_POST['login']))
{
    $servername="localhost"; 
    $username="root";
    $password="";
    $dbname="ecommerce";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    // Check connection
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap" rel="stylesheet"> 
    <title>Login</title>
    <style>
        *{
            font-family: "Ga Maamli", sans-serif;
        }
        body{
        font-weight: 400;
        font-style: normal;
        }
        .main {
            font-size: 20px;

        }
        .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        }
        .form-control {
        width: 50%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        color: #555;
        border: 1px solid #ccc;
        }
        .email,.password{
            font-size: 25px;
            margin-top: 1rem;
            margin: 1rem;
        }
        .btn {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: normal;
        text-align: center;
        cursor: pointer;
        border-radius: 4px;
        }
        .btn-primary {
        color: #fff;
        background-color: #428bca;
        border-color: #357ebd;
        width: 60px;
        margin-top: 30px;
        }
        .btn-primary :hover{
        color: #fff;
        background-color: #1e496e;
        border-color: #1c4468;
        width: 60px;
        margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>
            Login
        </h1>
        <div class="main">
            <div class="email">
                <label for="Email" required>Email:</label><br>
                <input type="email" class="form-control" >
            </div>
            <div class="password">
                <label for="Password" required>Password:</label><br>
                <input type="password" class="form-control" >
            </div>
            <div class="submit">
               <a>
                <button class="submitted btn btn-primary">Submit</button>
               </a> 
            </div>
        </div>
    </div>
</body>
</html>