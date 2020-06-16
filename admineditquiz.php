<?php
require('connect.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from quiz where id='".$id."'"; 
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
$question=$_REQUEST['questions'];
$submittedby = $_SESSION["username"];
$update="update quiz set questions='".$question."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
echo '<script>alert("Question Updated successfully");';
echo 'window.location.href = "viewquiz.php";';
echo'</script>';
}else {
?>

<br/><br/><br/>
<center>
    <table style="border-collapse:collapse;">
    <form name="form" method="post" action=""> 
    <tr>
        <td><h3 style="color:rgb(99, 37, 35)">Edit Question</h3></td>
    </tr>
    <tr>
        <td>
        <input type="hidden" name="new" value="1" />
        <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
        </td>
    </tr>
    <tr>
    <td><textarea type="text" name="questions" placeholder="Enter Question" rows="5" cols="100"><?php echo $row['questions'];?></textarea></td>
    </tr>
    <tr>
        <td align="right"><input class="btn btn-lg  btn-custom" name="submit" type="submit" value="Update" /></td>
    </tr>
</form>
    </table>
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
