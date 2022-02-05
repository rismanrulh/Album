<?php 
include "db_connect.php";
$id = $_GET['id'];
mysqli_query($connection,"DELETE FROM tb_album WHERE id = '$id'"); 

header("location:index.php");
?>