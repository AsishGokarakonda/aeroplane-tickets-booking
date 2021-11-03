<?php
	session_start();
?>
<!-- <html>
	<head>
		<title>
			Add Flight Schedule Details
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
    			margin: 0px 200px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			AADITH AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="add_flight_details_form_handler.php" method="post">
			<h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Flight Number</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Origin</td>
					<td class="fix_table">Destination</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="origin" required></td>
					<td class="fix_table"><input type="text" name="destination" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Date</td>
					<td class="fix_table">Arrival Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" required></td>
					<td class="fix_table"><input type="date" name="arr_date" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Time</td>
					<td class="fix_table">Arrival Time</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="time" name="dep_time" required></td>
					<td class="fix_table"><input type="time" name="arr_time" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Number of Seats in Economy Class</td>
					<td class="fix_table">Number of Seats in Business Class</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="number" name="seats_eco" required></td>
					<td class="fix_table"><input type="number"" name="seats_bus" required></td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Ticket Price(Economy Class)</td>
					<td class="fix_table">Ticket Price(Business Class)</td>
				</tr>
			</table>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">
						<input type="number" name="price_eco" required>
					</td>
					<td class="fix_table">
						<input type="number" name="price_bus" required>
					</td>
				</tr>
			</table>
			<br>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="text" name="jet_id" required>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
		</form>

	</body>
</html> -->

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
              <a href="admin_homepage.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item disabled">
              <a href="index.php" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="login_page.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="new_user.php" class="nav-link">Sign Up</a>
            </li>
          </ul>
          <div class="sign_btn" style="margin-left:40px"><a href="#"><img src="./Formcss/Images/profileIcon2.png" alt=""></a></div>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
    </header>
<div class="page-section">
      <div class="container">
      <form action="add_flight_details_form_handler.php" method="post">
	  		<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color:#34ee1a;text-align: center;display: block;font-size: 31px;'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?>
        <div class="text-center" style="margin-top:-24px">
          <h2 class="title-section mb-3">Book Your Tickets</h2>
          <p style="color:red;">Fill The Below Form So That We Will Check If The Flights Are Available Or Not</p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="#" class="form-contact">
              <div class="row">
			  <div class="col-sm-6 py-2" >
                  <label  for="name" style="color:#ff08b6;">Enter The Flight Number</label>
                  <input list="origins"  name="flight_no" type="text" class="form-control" id="name" placeholder="Eg:AA101" required>
                </div>

				<div class="col-sm-6 py-2" >
                  <label  for="name" style="color:#ff08b6;">Enter The Jet Id</label>
                  <input list="origins"  name="jet_id" type="text" class="form-control" id="name" placeholder="Eg:10001" required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;">Enter The Origin</label>
                  <input list="destinations"  name="origin"  type="text" class="form-control" id="email" placeholder="From.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="subject" style="color:#ff08b6;">Enter The Destination</label>
                  <!-- <input type="text" class="form-control" id="subject" placeholder="Subject.."> -->
				  <input list="destinations" name="destination" type="text" class="form-control" id="email" placeholder="To.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Enter The Departure Date</label>
                  <input type="date" name="dep_date" style="text-align:center;" class="form-control" id="email" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Enter The Arrival Date</label>
                  <input type="date" name="arr_date" style="text-align:center;" class="form-control" id="email" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Enter The Departure Time</label>
                  <input type="time" name="dep_time" style="text-align:center;" class="form-control" id="email" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Enter The Arrival Time</label>
                  <input type="time" name="arr_time" style="text-align:center;" class="form-control" id="email" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Number Of Seats(Economy Class)</label>
                  <input type="number" name="seats_eco" style="text-align:center;" class="form-control" id="email"  type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Number Of Seats(Business Class)</label>
                  <input type="number" name="seats_bus" style="text-align:center;" class="form-control" id="email"  type="number" name="no_of_pass" required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Ticket Price(Economy Class)</label>
                  <input type="number" name="price_eco" style="text-align:center;" class="form-control" id="email"  type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;" >Ticket Price(Business Class)</label>
                  <input type="number" name="price_bus" style="text-align:center;" class="form-control" id="email"  type="number" name="no_of_pass" required>
                </div>

                <div class="col-12 mt-3">
                <!-- <input type="submit" value="Search for Available Flights" name="Search"> -->
                  <button type="submit" name="Submit" style="display:block;margin:auto"  value="Submit" class="btn btn-primary px-5" >Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
</body>
</html>