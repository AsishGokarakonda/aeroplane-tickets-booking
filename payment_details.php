<?php
	session_start();
?>
<html>
	<head>
		<title>
			Enter Payment Details
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
    			margin: 0px 357px
			}
		</style>
		 <link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">

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
		<form style="text-align:center" action="payment_details_form_handler.php" method="post">
			<h3 style="margin-left: 30px"><u>Payment Summary</u></h3>
			<?php
				$flight_no=$_SESSION['flight_no'];
				$journey_date=$_SESSION['journey_date'];
				$no_of_pass=$_SESSION['no_of_pass'];
				$total_no_of_meals=$_SESSION['total_no_of_meals'];
				$payment_id=rand(100000000,999999999);
				$pnr=$_SESSION['pnr'];
				$_SESSION['payment_id']=$payment_id;
				$payment_date=date('Y-m-d'); 
				$_SESSION['payment_date']=$payment_date;


				// require_once('Database Connection file/mysqli_connect.php');
                DEFINE('DB_USER','root');
                DEFINE('DB_PASSWORD','');
                DEFINE('DB_HOST','localhost');
                DEFINE('DB_NAME','flightjet');

                $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
                OR dies('Could not connect to MySQL:' .
                    mysqli_connect_error());
				if($_SESSION['class']=='economy')
				{	
					$query="SELECT price_economy FROM Flight_Details where flight_no=? and departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				else if($_SESSION['class']=='business')
				{
					$query="SELECT price_business FROM Flight_Details where flight_no=? and departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				mysqli_stmt_close($stmt);
				mysqli_close($dbc);
				$total_ticket_price=$no_of_pass*$ticket_price;
				$total_meal_price=250*$total_no_of_meals;
				// if($_SESSION['insurance']=='yes')
				// {
				// 	$total_insurance_fee=100*$no_of_pass;
				// }
				// else
				// {
				// 	$total_insurance_fee=0;
				// }
				// if($_SESSION['priority_checkin']=='yes')
				// {
				// 	$total_priority_checkin_fee=200*$no_of_pass;
				// }
				// else
				// {
				// 	$total_priority_checkin_fee=0;
				// }
				// if($_SESSION['lounge_access']=='yes')
				// {
				// 	$total_lounge_access_fee=300*$no_of_pass;
				// }
				// else
				// {
				// 	$total_lounge_access_fee=0;
				// }
				$total_discount=0;
				$total_amount=$total_ticket_price+$total_meal_price+$total_discount; //$total_insurance_fee+$total_priority_checkin_fee+$total_lounge_access_fee;
				$_SESSION['total_amount']=$total_amount;

				echo "<table cellpadding=\"10\"	>";
				echo "<tr>";
				echo "<td>Base Fare, Fuel and Transaction Charges (Fees & Taxes included):</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_ticket_price."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\">Meal Combo Charges:</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_meal_price."</td>";
				echo "</tr>";

				// echo "<tr>";
				// echo "<td class=\"fix_table\">Priority Checkin Fees:</td>";
				// echo "<td class=\"fix_table\">&#x20b9; ".$total_priority_checkin_fee."</td>";
				// echo "</tr>";

				// echo "<tr>";
				// echo "<td class=\"fix_table\">Lounge Access Fees:</td>";
				// echo "<td class=\"fix_table\">&#x20b9; ".$total_lounge_access_fee."</td>";
				// echo "</tr>";

				// echo "<tr>";
				// echo "<td class=\"fix_table\">Insurance Fees:</td>";
				// echo "<td class=\"fix_table\">&#x20b9; ".$total_insurance_fee."</td>";
				// echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\">Discount:</td>";
				echo "<td class=\"fix_table\"> ".$total_discount."</td>";
				echo "</tr>";

				echo "</table>";

				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<table cellpadding=\"10\" style='margin-left: 50px'>";
				echo "<tr>";
				echo "<td class=\"fix_table\"><strong>Total:</strong></td>";
				echo "<td class=\"fix_table\"> ".$total_amount."</td>";
				echo "</tr>";
				echo "</table>";
				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<br>";
				echo "<p style=\"margin-left:50px\">Your Payment/Transaction ID is <strong>".$payment_id.".</strong> Please note it down for future reference.</p>";
				echo "<br>";
			?>
			<table cellpadding="5" style='margin-left: 50px'>
				<tr>
					<td class="fix_table"><strong>Enter the Payment Mode:-</strong></td>
				</tr>
				<tr>
					<td class="fix_table"><i class="fa fa-credit-card" aria-hidden="true"></i> Credit Card <input type="radio" name="payment_mode" value="credit card" checked></td>
					<td class="fix_table"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Debit Card <input type="radio" name="payment_mode" value="debit card"></td>
					<td class="fix_table"><i class="fa fa-desktop" aria-hidden="true"></i> Net Banking <input type="radio" name="payment_mode" value="net banking"></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Pay Now" name="Pay_Now">
		</form>
		<!-- 
•	Booking_Status
•	Payment_ID -->

		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</body>
</html>