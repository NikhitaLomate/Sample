<?php
include("connect.php");
?>
<?php
if(isset($_POST['new']) && $_POST['new']==1)
{
if($_REQUEST['update']){
    $id=$_POST['id'];   
}
}
?>
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
      <a class="navbar-brand" href="index.html"><img src="logo_nav.png"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="navbar-item custom3">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link " href="stories.php">Stories</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="taketest.php">Take Test</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="navbar-item custom3">
            <a class="nav-link" href="doctor.php">Psychiatrists</a>
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
        <!-- Default search bars with input group -->
       <div class="container">
        <form action="search.php" method="post">
          <div class="input-group mb-4">
            <input type="search" name="find" placeholder="Search (You can search by name as well as by place)" aria-describedby="" class="form-control">
            <div class="input-group-append">
              <button  type="submit" name="search" class="btn-custom"><i>Search</i></button>
            </div>
          </div>
        </form>
       </div>
        <!-- End -->  
  <!-- Page Content -->
  <div class="container" id="test">

<hr>

<div class="container">
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<td align="center"><strong>S.No</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Address</strong></td>
<td align="center"><strong>Gmail</strong></td>
<td align="center"><strong>Contact</strong></td>
<td align="center"><strong>Place</strong></td>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from doctor ORDER BY id;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["gmail"]; ?></td>
<td><?php echo $row["contact"]; ?></td>
<td><?php echo $row["place"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
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
