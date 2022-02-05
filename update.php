<?php
include "db_connect.php"; 
$id = $_GET['id'];
$title = $_POST['title'];
$artist = $_POST['artist'];
mysqli_query ($connection,"UPDATE tb_album SET title='$title', artist='$artist' WHERE id='$id'");
header("location:index.php");
?>

