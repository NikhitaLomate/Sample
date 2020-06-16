<?php
require('connect.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from doctor where id='".$id."'"; 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Soulful Mind</title>

  <style>
         #confirm  {
            display: none;
            background-color: #8416f9;
            color: #FCD116;
            border: 1px solid #aaa;
            position: fixed;
            width: 250px;
            left: 50%;
            margin-left: -100px;
            padding: 6px 8px 8px;
            box-sizing: border-box;
            text-align: center;
         }
         #confirm button {
            background-color: #48E5DA;
            display: inline-block;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 80px;
            cursor: pointer;
         }
         #confirm .message {
            text-align: left;
         }
      </style>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/customcss.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-style navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="adminpage.php"><img src="logo_nav1.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="navbar-item custom3">
            <a class="nav-link " href="viewstories.php">View Stories</a>
          </li>  
        <li class="navbar-item custom3">
            <a class="nav-link" href="viewquiz.php">Edit Quiz Questions</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link " href="adminaddremedies.php">Add Remedies</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="viewremedies.php">Edit Remedies</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="adminadddoctors.php">Add Doctor Details</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="viewdoctors.php">Edit Doctor Details</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="adminlogin.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Image and logo area. -->
        <div class="carousel-item active" style="background-image: url('backimage.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3><img class="img-fluid rounded" src="logo.png" alt=""></h3>
          </div>
        </div>
      </div>
    </div>
  </header>

  <br/>
  
  <!-- Page Content -->
  <?php
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$gmail=$_REQUEST['gmail'];
$contact=$_REQUEST['contact'];
$place=$_REQUEST['place'];
$submittedby = $_SESSION["username"];
$update="update doctor set name ='".$name."', address ='".$address."', gmail ='".$gmail."', contact ='".$contact."', place ='".$place."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
echo '<script>alert("Details Updated successfully");';
echo 'window.location.href = "viewdoctors.php";';
echo'</script>';
}else {
?>

<br/><br/><br/>
<center>
<div class="container">
<form name="new" action="" method="post" enctype='multipart/form-data'>
<table  width="100%" style="border-collapse:collapse; padding:10px;">
    <tr>
        <td colspan="4"><h3 style="color:rgb(99, 37, 35)">Edit Doctor Details</h3></td>
    </tr>
    <tr>
        <td>
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
        </td>
    </tr>
    <tr>
        <td><b>Name: </b><br/><br/></td>
        <td><input type="text" name="name" placeholder="Name" value="<?php echo $row['name'];?>"/><br/><br/></td>
        <td><b>Place: </b><br/><br/></td>
        <td><input type="text" name="place" placeholder="Place" value="<?php echo $row['place'];?>"/><br/><br/></td>
    </tr>
    <tr>
        <td><b>Contact: </b><br/><br/></td>
        <td><input type="text" name="contact" placeholder="Contact" value="<?php echo $row['contact'];?>" pattern="[0-9]+" title="Only enter numbers"/><br/><br/></td>
        <td><b>Email: </b><br/><br/></td>
        <td><input type="email" name="gmail" placeholder="Email" value="<?php echo $row['gmail'];?>" /><br/><br/></td>
    </tr>
    <tr>
        <td colspan="4"><b>Address:</b><br><textarea type="text" name="address" placeholder="Address" rows="3" cols="120"><?php echo $row['address'];?></textarea><br/><br/></td>
    </tr>
    <tr>
        <td colspan="4">
        <input class="btn btn-lg  btn-custom" name="submit" type="submit" value="Update" />
        </td>
    </tr>
</table>
</form>
</div>
</center>
<?php } ?>
<hr>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white"><!--Copyright &copy; Your Website 2019-->Footer</p>
    </div>
    <!-- /.container -->
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
