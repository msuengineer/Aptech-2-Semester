<?php
$id=$_GET['id'];
$servername="localhost";
$username="root";
$password="";
$dbname="e-commerce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$del_pro_query="DELETE FROM `product` WHERE `id` =$id";
if(mysqli_query($conn, $del_pro_query))
{
echo "<script>window.location='../table.php';</script>";
}
?>