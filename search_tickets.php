<?php
	session_start();
?>
<html>
    <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
        <title>
            Searching for the tickets
        </title>
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
    </head>
    <body>
    <header>
     <nav class="navbar navbar-expand-lg navbar-light " >
      <div class="container">
        <a href="index.php" class="navbar-brand">Flight<span class="text-primary">jet</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="aboutus.php" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="login_page.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="new_user.php" class="nav-link">Sign Up</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
</header>
<div class="container">
        <?php
            DEFINE('DB_USER','root');
            DEFINE('DB_PASSWORD','');
            DEFINE('DB_HOST','localhost');
            DEFINE('DB_NAME','flightjet');
            $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
            OR dies('Could not connect to MySQL:' .
                mysqli_connect_error());

         $query = "SELECT * FROM `flight_details`";
         $resul = mysqli_query($dbc,$query);
        //  $num = mysqli_num_rows($resul);
        //  echo $num;
            while($row = mysqli_fetch_assoc($resul)){
                if($_POST['searchname'] ==$row['flight_no'] ||$_POST['searchname'] ==$row['from_city'] ||$_POST['searchname'] ==$row['to_city']||$_POST['searchname'] ==$row['departure_date']||$_POST['searchname'] ==$row['arrival_date']||$_POST['searchname'] ==$row['departure_time']||$_POST['searchname'] ==$row['arrival_time']||$_POST['searchname'] ==$row['seats_economy']||$_POST['searchname'] ==$row['seats_business']||$_POST['searchname'] == $row['price_economy']||$_POST['searchname'] == $row['price_business']||$_POST['searchname'] == $row['jet_id'] ){
                echo  $row['flight_no'] ."  |   ". $row['from_city']."  |   ".$row['to_city'] ."  |   ". $row['departure_date']."  |   ".$row['arrival_date'] ."  |   ". $row['departure_time']."  |   ".$row['arrival_time'] ."  |   ". $row['seats_economy']."  |   ".$row['seats_business']."  |   ".$row['price_economy']."  |   ".$row['price_business']."  |   ".$row['jet_id'];
                echo "<br>";
                }
            }
            

        
        
        ?>
    </body>
</html>