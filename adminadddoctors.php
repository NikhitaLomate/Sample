<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Soulful Mind</title>

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
include("connect.php");

if(isset($_POST['submit'])){
   
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $place=$_POST['place'];
    
     // Insert record
     $query = "insert into doctor(name,address,gmail,contact,place) values('".$name."','".$address."','".$email."','".$contact."','".$place."')";
     $result=mysqli_query($con,$query);

  
  if($result){
    echo '<script>alert("Details Added Successfully");';
    echo 'window.location.href = "viewdoctors.php";';
    echo'</script>';
  }
}
  else{
?>
<br/>
<div class="container">
<h3 style="color: rgb(99, 37, 35)">Doctor Details</h3><br/>
<center>
<form name="new" action="" method="post" enctype='multipart/form-data'>
<table  width="100%" style="border-collapse:collapse; padding:10px;">
    <tr>
        <td><b>Name: </b><br/><br/></td>
        <td><input type="text" name="name" placeholder="Name" required /><br/><br/></td>
        <td><b>Place: </b><br/><br/></td>
        <td><input type="text" name="place" placeholder="Place" required /><br/><br/></td>
    </tr>
    <tr>
        <td><b>Contact: </b><br/><br/></td>
        <td><input type="text" name="contact" placeholder="Contact" required pattern="[0-9]+" title="Only enter numbers"/><br/><br/></td>
        <td><b>Email: </b><br/><br/></td>
        <td><input type="email" name="email" placeholder="Email" required /><br/><br/></td>
    </tr>
    <tr>
        <td colspan="4"><b>Address:</b><br><textarea type="text" name="address" placeholder="Address" required rows="3" cols="120"></textarea><br/><br/></td>
    </tr>
   
</table>
</center>
<input class="btn btn-lg  btn-custom" type="submit" name="submit" value="Submit"><br>
</form>
<?php } ?>
</div>

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
