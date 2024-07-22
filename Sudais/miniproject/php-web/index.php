<?php

    require('include/connect.php');

    $alert = "";

    if(isset($_POST['name']) && $_POST['name'] != ""){

        $user = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users(email, pass, username) VALUES ('$email', '$password', '$user' );";

        $result = $conn->query($sql);

        if($result == true){
            $alert = '<div> Done hogya <a target="blank" href="login.php">Click to login</a> </div>';
        }else{
            $alert = '<div> error</div>';
        }

    }
    // print_r ($_POST);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php echo $alert; ?>
     <form action="index.php" method="POST" >
        <div>
            <label for="name">Full Name</label>
            <input type="text" for="name" name="name">
        </div>

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