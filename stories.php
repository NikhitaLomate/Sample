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
  
  <!-- Page Content -->
  <div class="container" id="test">
<hr>
<div class="container">
<?php
include("connect.php");
$sel_query="Select * from stories ORDER BY id;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<p class="border-custom2"><?php echo $row["story"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;
<i>~<b><u><?php echo $row["name"]; ?></i></b></u></p>
<?php  } ?>
<hr>
  </div>
  <!-- /.container -->
<?php
  if(isset($_POST['submit'])){
   
   $story=$_POST['story'];
   $name=$_POST['name'];
   
   if($name==""){
       $name="Anonymous";
   }

    // Insert record
    $query = "insert into stories(story,name) values('".$story."','".$name."')";
    $result=mysqli_query($con,$query);

 
 if($result){
   echo '<script>alert("Thank you for Sharing your story");';
   echo 'window.location.href = "stories.php";';
   echo'</script>';
 }
}
 else{
?>
<br/>
<div class="container">
<h3 style="color: rgb(99, 37, 35)">Share your Story</h3>
<form name="new" action="" method="post" enctype='multipart/form-data'>
       <b>Share your Experience</b><br/><textarea type="text" name="story" required rows="10" cols="150"></textarea><br/><br/>
       <b>Name</b><br/><textarea type="text" name="name" placeholder="Enter your name (Optional)" rows="1" cols="150"></textarea><br/><br/>
       <input class="btn btn-lg  btn-custom" type="submit" name="submit" value="Submit Your Story"><br>
</form>
<?php } ?>
</div>
<hr>
  </div>
  

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
