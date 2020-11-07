<?php 

$id = $_GET['id'];
include('dbConn.php');

$sql = "DELETE FROM scpSubject where item='$id'";

if($conn->query($sql) === true){ 

	header('location:index.php?msg');

}

?>