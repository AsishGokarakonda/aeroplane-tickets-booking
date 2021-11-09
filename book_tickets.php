
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Tickets</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
              <a href="customer_homepage.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item disabled">
              <a href="aboutus.php" class="nav-link">About Us</a>
            </li>
          </ul>
          <div class="sign_btn" style="margin-left:40px"><a href="profileview.php"><img src="./Formcss/Images/profileIcon2.png" alt=""></a></div>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
    </header>
<div class="page-section">
      <div class="container">
      <form action="view_flights_form_handler.php" method="post">
        <div class="text-center" style="margin-top:-24px">
          <h2 class="title-section mb-3">Book Your Tickets</h2>
          <p style="color:red;">Fill The Below Form So That We Will Check If The Flights Are Available Or Not</p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="#" class="form-contact">
              <div class="row">

                <div class="col-sm-6 py-2">
                  <label for="name" style="color:#ff08b6;">Enter The Origin</label>
                  <input list="origins" name="origin" type="text" class="form-control" id="name" placeholder="From.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;">Enter The Destination</label>
                  <input list="destinations" name="destination" type="text" class="form-control" id="email" placeholder="To.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="subject" style="color:#ff08b6;">Enter The Departure Date</label>
                  <!-- <input type="text" class="form-control" id="subject" placeholder="Subject.."> -->
                  <input type="date" class="form-control" style="text-align:center" name="dep_date" min=
                    <?php 
                      $todays_date=date('Y-m-d'); 
                      echo $todays_date;
                    ?> 
                    max=
                    <?php 
                      $max_date=date_create(date('Y-m-d'));
                      date_add($max_date,date_interval_create_from_date_string("90 days")); 
                      echo date_format($max_date,"Y-m-d");
						        ?> required>
                </div>

                <div class="col-sm-4 py-2">
                  <label for="email" style="color:#ff08b6;" >Enter Number Of Passengers</label>
                  <input type="text" style="text-align:center;" class="form-control" id="email" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

                <div class="col-12 py-2">
                  <label for="message" style="color:#ff08b6;">Enter The Class</label>
                  <br>
                  <!-- <textarea id="message" rows="8" class="form-control" placeholder="Enter message.."></textarea> -->
                  <select name="class" class="col-sm-2 py-2 " style="text-align:center">
                  <option value="economy" >Economy</option>
                  <option value="business" >Business</option>
                  </select>
                </div>
                <div class="col-12 mt-3">
                <!-- <input type="submit" value="Search for Available Flights" name="Search"> -->
                  <button type="submit" style="display:block;margin:auto"  name="Search" class="btn btn-primary px-5" >Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
</body>
</html>


<!-- <html>
	<head>
		<title>
			View Available Flights
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	</head>
	<body>

		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			FLIGHTJET AIRLINES
		</h1>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <span class="nav-link active" >Flightjet</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="new_user.php">Sign up</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Log out</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Contact us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
		<form action="view_flights_form_handler.php" method="post">
			<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Origin</td>
					<td class="fix_table">Enter the Destination</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="bangalore">
  						</datalist>
						</td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="mumbai">
  						  	<option value="mysore">
  						  	<option value="mangalore">
  						  	<option value="chennai">
  						  	<option value="hyderabad">
  						</datalist>
						</td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Departure Date</td>
					<td class="fix_table">Enter the No. of Passengers</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
					required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Class</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economy</option>
  							<option value="business">Business</option>
  						</select>
  					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Search for Available Flights" name="Search">
		</form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	  
	</body>
</html> -->