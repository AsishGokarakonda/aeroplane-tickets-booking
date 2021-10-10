<?php
	session_start();
?>
<html>
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
		<?php
				// DEFINE('DB_USER','root');
				// DEFINE('DB_PASSWORD','');
				// DEFINE('DB_HOST','localhost');
				// DEFINE('DB_NAME','flightjet');

				// $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
				// OR dies('Could not connect to MySQL:' .
				// 	mysqli_connect_error());
				// $flightDet ="	CREATE TABLE IF NOT EXISTS `flight_details` (
				// 		`flight_no` varchar(10) NOT NULL,
				// 		`from_city` varchar(20) DEFAULT NULL,
				// 		`to_city` varchar(20) DEFAULT NULL,
				// 		`departure_date` date NOT NULL,
				// 		`arrival_date` date DEFAULT NULL,
				// 		`departure_time` time DEFAULT NULL,
				// 		`arrival_time` time DEFAULT NULL,
				// 		`seats_economy` int(5) DEFAULT NULL,
				// 		`seats_business` int(5) DEFAULT NULL,
				// 		`price_economy` int(10) DEFAULT NULL,
				// 		`price_business` int(10) DEFAULT NULL,
				// 		`jet_id` varchar(10) DEFAULT NULL
				// 	  )";
				// require_once('Database Connection file/mysqli_connect.php');
				// $query="INSERT INTO flight_details (flight_no, from_city, to_city, departure_date, arrival_date, departure_time, arrival_time, seats_economy, seats_business, price_economy, price_business, jet_id) VALUES 
				// ('AA101', 'bangalore', 'mumbai', '2019-12-01', '2019-12-02', '21:00:00', '01:00:00', 195, 96, 5000, 7500, '10001'),
				// ('AA102', 'bangalore', 'mumbai', '2019-12-01', '2019-12-01', '10:00:00', '12:00:00', 200, 73, 2500, 3000, '10002'),
				// ('AA103', 'bangalore', 'chennai', '2019-12-03', '2019-12-03', '17:00:00', '17:45:00', 150, 75, 1200, 1500, '10004'),
				// ('AA104', 'bangalore', 'mysore', '2019-12-04', '2019-12-04', '09:00:00', '09:17:00', 37, 4, 500, 750, '10003'),
				// ('AA106', 'bangalore', 'hyderabad', '2019-12-01', '2019-12-01', '13:00:00', '14:00:00', 150, 75, 3000, 3750, '10004'),
				// ('AIR707MXPA', 'PATNA', 'MUMBAI', '2019-09-01', '2019-09-01', '10:00:00', '18:00:00', 232, 128, 7500, 12000, 'AIR707MAX'),
				// ('AIRBUS69BA', 'bangalore', 'chennai', '2019-07-19', '2019-07-19', '10:00:00', '13:00:00', 69, 89, 6500, 7800, 'AIRBUS69'),
				// ('AIRBUS707P', 'bangalore', 'Patna', '2019-08-19', '2019-08-19', '00:00:00', '18:00:00', 75, 65, 6969, 7856, 'AIRBUS707'),
				// ('AIRBUS70BA', 'bangalore', 'chennai', '2019-08-19', '2019-08-19', '10:00:00', '15:00:00', 523, 76, 4523, 8652, 'AIRBUS70'),
				// ('AIRBUS70PA', 'bangalore', 'Patna', '2019-08-19', '2019-08-19', '10:01:00', '18:00:00', 498, 65, 5788, 6966, 'AIRBUS70'),
				// ('BOING707PA', 'KOLKATTA', 'PATNA', '2019-08-25', '2019-08-25', '10:00:00', '13:00:00', 400, 21, 4500, 7000, 'BOING707')";
				// mysqli_close($dbc);
		?>
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
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="mumbai">
  						  	<option value="mysore">
  						  	<option value="mangalore">
  						  	<option value="chennai">
  						  	<option value="hyderabad">
  						</datalist>
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
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
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
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
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</body>
</html>