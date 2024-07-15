<?php
$servername="localhost";
$username="root";
$password="";
$dbname="e-commerce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn -> connect_errno){
    echo "Failed to connect My SQL". $conn -> connect_error;
    exit();
}else{
    $cat_fetch_query="SELECT * FROM `categories`";
    //query 1
    //SELECT * FROM `categories` WHERE status=1
    //SELECT * FROM `categories` WHERE status=0
    //SELECT * FROM `categories` WHERE id >=4
    //SELECT * FROM `categories` WHERE id >=12
    //SELECT * FROM `categories` WHERE id <=4
    //SELECT * FROM `categories` WHERE id <=12
    $cat_results= mysqli_query($conn,$cat_fetch_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> 
  <style>
    body{
      font-family: "Ga Maamli", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
    td{
        background-color: antiquewhite;
    }
    td:hover{
        background-color: rgb(168, 168, 168);
        font-size: 20px;
    }
    button{
        margin: 10px;
        border-radius: 0.5rem;
        padding-left: 20px;
        padding-right: 20px;
        color: black;
        font-weight: bold;
    }
    .button-red{
        background-color: red;
        color: aliceblue;
    }
    .button-green{
        background-color: green;
        color: aliceblue;
    }
     .button-blue{
        background-color: green;
        color: blue;
    }
    tbody{
        background-color: rgb(243, 236, 236);
    }
    tbody:hover{
        background-color: aliceblue;
        
    }
    .text {
      font-family: "Ga Maamli", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

  </style>
</head>
<body>

<div class="container">
  <h1>Welcome </h1>
  <h2>Category</h2>
  <p class="text">All Category that found in our data-base:</p>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row_array=mysqli_fetch_assoc($cat_results)){
        ?>
        <tr>
        <td><?php echo $row_array['name'];?></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
