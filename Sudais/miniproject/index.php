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
    $product_fetch_query="SELECT * FROM `product`";
    $pro_results= mysqli_query($conn,$product_fetch_query);
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <style>
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
    tbody{
        background-color: rgb(243, 236, 236);
    }
    tbody:hover{
        background-color: aliceblue;
        
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Products</h2>
  <p>All Products that found in our data-base:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>category</th>
        <th>stock</th>
        <th>price</th>
        <th>color</th>
        <th>rating</th>
        <th>status</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($row_array=mysqli_fetch_assoc($pro_results)){
        ?>
        <tr>
        <td><?php echo $row_array['id'];?></td>
        <td><?php echo $row_array['name'];?></td>
        <td><?php echo $row_array['category'];?></td>
        <td><?php echo $row_array['stock'];?></td>
        <td><?php echo $row_array['price'];?></td>
        <td><?php echo $row_array['color'];?></td>
        <td><?php echo $row_array['rating'];?></td>
        <td><?php echo $row_array['status'];?></td>
        <td><?php echo $row_array['created_at'];?></td>
        <td><?php echo $row_array['updated_at'];?></td>
        <th><button class="btn button-green">Add</button></th>
        <th><button class="btn button-red">Delete</button></th>
        </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
