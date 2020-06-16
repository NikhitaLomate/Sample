<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM remedies WHERE id=$id"; 
$result = mysqli_query($con,$query) or die (mysqli_error($con));
header("Location: viewremedies.php"); 
?>