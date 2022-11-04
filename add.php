<?php 
// nhan du lieu tu form  from add.hmtl;
$ht =$_POST['masv'];
$ten = $_POST['hoten']; 
$lop = $_POST['lop'];
// connect to sql
require_once 'connect.php';
// sau khi connect ta se viet lenh sql de them du lieu;
$addsql = "INSERT INTO sinhvien (masv,hoten,lop) VALUES ('$ht','$ten','$lop')";

// echo $addsql; exit;

// thuc thi cau lenh them
 if (mysqli_query($conn,$addsql)){
echo "<h1>connect successfully</h1>";
 header('Location: ./dasbord.php');
 }


?>