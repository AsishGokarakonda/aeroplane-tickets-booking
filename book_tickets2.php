<?php
	session_start();
?>
<html>
	<head>
		<title>
			Enter Travel/Ticket Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=number] {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 0px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 500px
			}
			input[type=radio] {
    			margin-right: 30px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 15px;
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
		<!-- <img class="logo" src="images/shutterstock_22.jpg"/>  -->
		<!-- <h1 id="title">
			AADITH AIRLINES
		</h1> -->
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
		<?php
			$no_of_pass=$_SESSION['no_of_pass'];
			$class=$_SESSION['class'];
			$count=$_SESSION['count'];
			$flight_no=$_POST['select_flight'];
			$_SESSION['flight_no']=$flight_no;
			//$pass_name=array();
			echo "<h2 style=\"text-align: center;margin-top: 15px;margin-bottom:25px;color:#00b7ff;\">Please Fill The Passengers Details</h2>";
			
			echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
			while($count<=$no_of_pass)
			{
					echo "<p style=\"color:#ff0060;font-weight:501;margin-left:190px\">PASSENGER ".$count."</p>";
					echo "<table cellpadding=\"0\" style=\"display:block ruby;text-align:center\">";
					echo "<tr>";
					echo "<td class=\"fix_table_short\" style=\"margin:5px 20px\">Name</td>";
					echo "<td class=\"fix_table_short\" style=\"margin:5px 20px\">Age</td>";
					echo "<td class=\"fix_table_short\" style=\"margin:5px 20px\">Gender</td>";
					echo "<td class=\"fix_table_short\" style=\"display:block;margin:5px 20px\">Inflight Meal</td>";
					echo "<td class=\"fix_table_short\" style=\"margin:5px 20px\">Frequent Flier ID (if applicable)</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td style=\"margin:5px 20px\" class=\"fix_table_short\"><input style=\"margin:5px 20px\" type=\"text\" name=\"pass_name[]\" required></td>";
					echo "<td style=\"margin:5px 20px\" class=\"fix_table_short\"><input style=\"margin:5px 20px\" type=\"number\" name=\"pass_age[]\" required></td>";
					echo "<td style=\"margin:5px 20px\" class=\"fix_table_short\">";
					echo "<select style=\"margin:5px 20px\" name=\"pass_gender[]\">";
  					echo "<option value=\"male\">Male</option>";
  					echo "<option value=\"female\">Female</option>";
  					echo "<option value=\"other\">Other</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td style=\"margin:5px 20px\" class=\"fix_table_short\">";
					echo "<select name=\"pass_meal[]\">";
  					echo "<option value=\"yes\">Yes</option>";
  					echo "<option value=\"no\">No</option>";
  					echo "</select>";
  					echo "</td>";
  					echo "<td style=\"margin:5px 20px\" class=\"fix_table_short\"><input type=\"text\" name=\"pass_ff_id[]\"></td>";
					echo "</tr>";
					echo "</table>";
					echo "<br><hr>";
					$count=$count+1;
				}
				// echo "<br><h2>ENTER TRAVEL DETAILS</h2>";
				// echo "<table cellpadding=\"5\">";
				// echo "<tr>";
				// echo "<td class=\"fix_table_short\">Do you want access to our Premium Lounge?</td>";
				// echo "<td class=\"fix_table_short\">Do you want to opt for Priority Checkin?</td>";
				// echo "<td class=\"fix_table_short\">Do you want to purchase Travel Insurance?</td>";
				// echo "</tr>";
				// echo "<tr>";
				// echo "<td class=\"fix_table\">";
				// echo "Yes <input type='radio' name='lounge_access' value='yes' checked/> No <input type='radio' name='lounge_access' value='no'/>";
  				// echo "</td>";
  				// echo "<td class=\"fix_table\">";
				// echo "Yes <input type='radio' name='priority_checkin' value='yes' checked/> No <input type='radio' name='priority_checkin' value='no'/>";
  				// echo "</td>";
  				// echo "<td class=\"fix_table\">";
				// echo "Yes <input type='radio' name='insurance' value='yes' checked/> No <input type='radio' name='insurance' value='no'/>";
  				// echo "</td>";
				// echo "</tr>";
				// echo "</table>";
				// echo "<br><br>";
				echo "<input class=\"btn btn-primary px-5\" style=\"display:block;margin:auto\" type=\"submit\" value=\"Submit The Details\" name=\"Submit\">";
				echo "</form>";
		?>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</body>
</html>