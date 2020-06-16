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
            $count=1;
            $sel_query="Select id,questions from quiz ORDER BY id;";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
            <p class="border-custom1" name="values">&nbsp;&nbsp;<strong><?php echo $row["id"]; ?>.&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["questions"]; ?></strong><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="<?php echo $count;?>" value="0" id="value<?php echo $count;?>" onclick="myfunction()"><label>Not at all</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="<?php echo $count;?>" value="1" id="value<?php echo $count;?>" onclick="myfunction()"><label>Several days</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="<?php echo $count;?>" value="2" id="value<?php echo $count;?>" onclick="myfunction()"><label>More than half of the days</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="<?php echo $count;?>" value="3" id="value<?php echo $count;?>" onclick="myfunction()"><label>Nearly everday</label><br>
            </p><hr>
            <?php $count++; } ?>
        </form>
          </div>
    <!-- /.row -->
    <center>
    <input class="btn btn-lg  btn-custom" type="submit" name="SUBMIT"  onclick="displayRadioValue()" /><br>
    <div id="result" type="hidden"></div><br>
    </center>
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
  <script> 
        function displayRadioValue() { 
            document.getElementById("result").innerHTML = "";  
            var ele = document.getElementsByTagName('input'); 
              var total=0;
              var ele1;
            for(i = 0; i < ele.length; i++) { 
                  
                if(ele[i].type="radio") { 
                  
                  if(ele[i].checked){
                    
                    total += Number(ele[i].value);
                  }

                    //if(ele[i].checked)
                      //ele1[i]=ele[i].value;
                      //  document.getElementById("result").innerHTML 
                        //        += ele[i].name + " Value: " 
                          //      + ele[i].value + "<br>" ;                              
              }
            } 

            var percent = (total/30) * 100;
            var level="";

            if((percent>=75)||(percent==100)){
              level="High";
            }
            else if((percent<75)&&(percent>=30)){
              level="Medium";
            }
            else{
              level="low";
            }
            
                alert("Your Score is: "+percent+"%"+"\nYou have "+level+" level of Depression");
                window.location.href = "displayremedies.php";
        } 
    </script>
</body>
</html>
