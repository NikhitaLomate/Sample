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
   
    $level=$_POST['level'];
    $remedy=$_POST['remedy'];
    
    
     // Insert record
     $query = "insert into remedies(level,remedy) values('".$level."','".$remedy."')";
     $result=mysqli_query($con,$query);

  
  if($result){
    echo '<script>alert("Remedy added successfully");';
    echo 'window.location.href = "viewremedies.php";';
    echo'</script>';
  }
}
  else{
?>
<br/>
<div class="container">
<h3 style="color: rgb(99, 37, 35)">Add Remedy</h3>
<center>
<form name="new" action="" method="post" enctype='multipart/form-data'>
        <label><b>Select Level:</b></label><br/>
        <input type='radio' name='level' value='1' />
        <label>Low</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' name='level' value='2' />
        <label>Medium</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' name='level' value='3' />
        <label>High</label><br/><br/>
        <b>Add Remedy</b><br/><textarea type="text" name="remedy" placeholder="Enter Remedy" required rows="10" cols="100"></textarea><br/><br/>
        <input class="btn btn-lg  btn-custom" type="submit" name="submit" value="Add Remedy"><br>
</center>
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
