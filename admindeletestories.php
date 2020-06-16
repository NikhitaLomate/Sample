<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM stories WHERE id=$id"; 
$result = mysqli_query($con,$query) or die (mysqli_error($con));
header("Location: viewstories.php"); 
?>