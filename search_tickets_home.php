<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Airline Management System</title>

  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->

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

    //    $query="SELECT pnr,date_of_reservation,class,no_of_passengers,payment_id,customer_id FROM flight_Details where `flight_no`=? and `from_city`=? and `to_city`=? and `departure_date`=? and `arrival_date`=? and `departure_time`=? and `arrival_time`=? and `seats_economy`=? and `seats_business`=? and `price_economy`=? and `price_business`=? and `jet_id`=? ORDER BY departure_date";
    //    $stmt=mysqli_prepare($dbc,$query);
    $query = "SELECT * FROM `flight_details`";
    $resul = mysqli_query($dbc,$query);
    // $num = mysqli_num_rows($resul);
    // echo $num;
while($row = mysqli_fetch_assoc($resul)){
    // echo var_dump($row);
    echo  $row['flight_no'] ."  |   ". $row['from_city']."  |   ".$row['to_city'] ."  |   ". $row['departure_date']."  |   ".$row['arrival_date'] ."  |   ". $row['departure_time']."  |   ".$row['arrival_time'] ."  |   ". $row['seats_economy']."  |   ".$row['seats_business']."  |   ".$row['price_economy']."  |   ".$row['price_business']."  |   ".$row['jet_id'];
    echo "<br>";
}
?>
<br>
<br>
<div>
  Enter some words to search in the flight
</div>
<form action="search_tickets.php" method="post" class="d-flex">
        <input class="form-control me-2" name="searchname" type="search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success"  type="submit">Search</button>
</form>
</div>
</body>
</html>