<?php 
$id =  $_GET['id'];
// echo $id;
require_once ('connect.php');
$delete_sql = "DELETE FROM sinhvien where ID=$id";

mysqli_query($conn, $delete_sql);
echo "delete successfully";
echo "<a href=dasbord.php>back</a>";
?>