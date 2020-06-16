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
    <!--Quiz-->
     <div>
        <form>
            
            <?php
            $arr=array();
            $sel_query="Select level from remedies;";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
            <?php array_push($arr,$row["level"]); ?>
            </p>
            <?php } ?>
            <?php
            $n=sizeof($arr);
            for($i=0;$i<$n;$i++){
              for ($j = 0; $j < $n - $i - 1; $j++)  { 
            if ($arr[$j] > $arr[$j+1]) 
            { 
                $t = $arr[$j]; 
                $arr[$j] = $arr[$j+1]; 
                $arr[$j+1] = $t; 
            } 
            }
          }

          for($i=0;$i<$n;$i++){
                      for($j=$i+1;$j<$n;$j++){
           if($arr[$i]==$arr[$j])
           {
             $arr[$i]= -1;

           }
          }
        }
         ?>
         <h3>Remedies for Low Level Depression</h3>
         <?php
        for($i=0;$i<$n;$i++){
                  $tmp=$arr[$i];
           $sel_query="Select * from remedies WHERE level = '$tmp'";
            ?>
          <?php
          $count=1;
          if($arr[$i]==1){ 
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
            <p class="border-custom1" name="values"><b><?php echo $count; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $row["remedy"]; ?><br>
            </p>
            <?php $count++;} } } ?>
            <h3>Remedies for Medium Level Depression</h3>
            <?php
        for($i=0;$i<$n;$i++){
                  $tmp=$arr[$i];
           $sel_query="Select * from remedies WHERE level = '$tmp'";
            ?>
            <?php
            $count1=1;
              if($arr[$i]==2){ 
                $result = mysqli_query($con,$sel_query);
                while($row = mysqli_fetch_assoc($result)) { ?>
                <p class="border-custom1" name="values"><b><?php echo $count1; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["remedy"]; ?><br>
                </p>
                <?php $count1++; } }  }?>
                <h3>Remedies for High Level Depression</h3>
                <?php
        for($i=0;$i<$n;$i++){
                  $tmp=$arr[$i];
           $sel_query="Select * from remedies WHERE level = '$tmp'";
            ?>
                <?php
                $count2=1;
              if($arr[$i]==3){ 
                $result = mysqli_query($con,$sel_query);
                while($row = mysqli_fetch_assoc($result)) { ?>
                <p class="border-custom1" name="values"><b><?php echo $count2; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["remedy"]; ?><br>
                </p>
                <?php $count2++; } } } ?>
        </form>
          </div>
    <!-- /.row -->
    <hr>
  </div>
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
