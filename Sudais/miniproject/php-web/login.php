<?php


require('include/connect.php');



if(isset($_POST['email']) && $_POST['email'] != ""){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " SELECT * FROM users WHERE email='$email';";

    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $data = $result->fetch_assoc();
        if($data['pass'] == $password){
            header( "Location: godigital.php" );
            die();
        }
        else{
            header( "Location: error.php" );
            die();
        }
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <form action="login.php" method="POST" >

        <div>
            <label for="email">Email</label>
            <input type="email" for="name" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" for="pass" name="password">
        </div>

        <button type="submit">Submit</button>
     </form>
</body>
</html>