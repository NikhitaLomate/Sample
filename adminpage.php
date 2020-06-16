<?php
include("connect.php");
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
<style>
    #cover {
    background: #222 url('backimage.jpg') center;
    background-size: cover;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}

#cover-caption {
    width: 100%;
    position: relative;
    z-index: 1;
}

/* only used for background overlay not needed for centering */
form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}
</style>
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

  <!-- Page Content -->
    <!--Login page (admin)-->
<section id="cover" class="min-vh-100">
    <div id="cover-caption" class="form">
        <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <img class="img-fluid rounded" src="logo.png" alt="">
                    <h3>Welcome Admin</h3>
                </div>
            </div>
        </div>
    </div>
</section>
    
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
