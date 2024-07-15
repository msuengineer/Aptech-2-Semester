<?php
session_start();
//echo $_SESSION['user_id'];
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
    $product_fetch_query="SELECT * FROM `product` ORDER BY stock DESC";
   $pro_result= mysqli_query($conn,$product_fetch_query);

   $user_fetch_query="SELECT * FROM `users` WHERE `id`=".$_SESSION['user_id'];
   $user_result= mysqli_query($conn,$user_fetch_query);
   $user_row=mysqli_fetch_assoc($user_result);

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
  <h1>Welcome <?php echo $user_row['name'];?></h1>
  <h2>All Products</h2>   
  <a href="insert_product.php"><button class="btn btn-info">Add Product</button></a>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Color</th>
        <th>Rating</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php
    while($row_array=mysqli_fetch_assoc($pro_result)){
        ?>
        <tr>
        <td><?php echo $row_array['name'];?></td>
        <td><?php echo $row_array['category'];?></td>
        <td><?php echo $row_array['stock'];?></td>
        <td><?php echo $row_array['price'];?></td>
        <td><?php echo $row_array['color'];?></td>
        <td><?php echo $row_array['rating'];?></td>
        <td><?php echo $row_array['status'];?></td>
        <td><?php echo $row_array['created_at'];?></td>
        <td><?php echo $row_array['updated_at'];?></td>
        <td>
          <A href="action/delete_pro.php?id=<?php echo $row_array['id'];?>"><button>Delete</button></A>
          <button>UPdate</button></td>
      </tr>
    <?php
    }
    ?>  
    </tbody>
  </table>
</div>

</body>
</html>
