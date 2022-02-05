<?php include
"db_connect.php";
$title = $_POST['title']; $artist = $_POST['artist'];
mysqli_query($connection,"insert into tb_album values('', '$title', '$artist')");
header("location:index.php");
?>