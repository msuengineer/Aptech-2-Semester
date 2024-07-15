<?php
if (isset($_POST["add_product"]))
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
    $name=$_POST['pro_name'];
    $category=$_POST['pro_category'];
    $stock=$_POST['pro_stock'];
    $price=$_POST['pro_price'];
    $color=$_POST['pro_color']; 
    $rating=$_POST['pro_rating'];
    //echo $name;
    $insert_query="    INSERT INTO `product`( `name`, `category`, `stock`, `price`, `color`, `rating`) 
    VALUES('$name','$category','$stock','$price','$color','$rating');";
    echo $insert_query;
    if(mysqli_query($conn,$insert_query)){
        echo "
        <script>
        alert('data has been submitted')
        window.location='../index.php'
        </script>";
        }
    }
}
?>