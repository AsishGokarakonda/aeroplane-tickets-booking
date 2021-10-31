 <?php
	session_start();
	if($_SESSION['login_user']==null){
		header('location:home_page.php');
	}
?>
 <!-- <html>
	<head>
		<title>
			Welcome Customer
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
    			margin: 0px 127px;
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
		<img class="logo" src="images/irctc.jpg"/> 
		<h1 id="title">
			Flightjet Airways
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
		<?php
			$temp =$_SESSION['login_user'];
			echo "<h2>Welcome ".$temp."</h2>";
		?>
		<table cellpadding="5">
			<tr>
				<td class="admin_func"><a href="book_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Book Flight Tickets</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View Booked Flight Tickets</a>
				</td>
			</tr>
<tr>
				<td class="admin_func"><a href="pnr.php"><i class="fa fa-plane" aria-hidden="true"></i> Print Booked Ticket</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="cancel_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Cancel Booked Flight Tickets</a>
				</td>
			</tr>
		</table>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</body>
</html> 
 -->


 <!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Customer Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="Formcss/bootstrap.min.css">
      <link rel="stylesheet" href="Formcss/style.css">
      <link rel="stylesheet" href="Formcss/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="Formcss/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <style>
      body{
        color: #daccfd;
    }
   </style>

   </head>
   <body>
    <header>
        <!-- header inner -->
        <div class="header" style="position: fixed;z-index: 1;">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                       <div class="center-desk">
                          <div class="logo" style="margin: 10px -80px;">
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarsExample04">
                          <ul class="navbar-nav mr-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                             </li>
							 <li class="nav-item">
                              <a class="nav-link" href="book_tickets.php">Book Tickets</a>
                           </li>
						   <li class="nav-item">
                              <a class="nav-link" href="new_user.php">Sign Up</a>
                           </li>
                             <li class="nav-item">
                              <a class="nav-link" href="Aboutus.php">About Us</a>
                           </li>

                          </ul>
                          <div class="sign_btn"><a href="#"><img src="./Formcss/Images/profileIcon2.png" alt=""></a></div>
                       </div>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>
     <br>
 <!-- features -->
 <div class="Features">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
				  <?php
						$temp =$_SESSION['login_user'];
						echo "<h2>Welcome To Our FlightJet Airline Management ".$temp."</h2>";
					?>
                     <!-- <h2>Welcome To Our FlightJet Airline Management</h2> -->
                     <span>You Can Do The Following Things From Here.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="./Formcss/Images/flightseats.jpg" alt="#"/></i>
                     <h4>See The Available Flights As Per  Your Requirement</h4>
					 <a href="#" class="btn btn-primary" style="margin-top:20px">Search Now</a>
                  </div>
                  <div class="Our_box">
                     <i><img src="./Formcss/Images/cancelbooking.jpg" alt="#"/></i>
                     <h4>Cancel Booked tickets</h4>
					 <a href="cancel_booked_tickets.php" class="btn btn-primary" style="margin-top:20px">Cancel Now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="./Formcss/Images/reservationConfirm.jpg" alt="#"/></i>
                     <h4>Book flight tickets</h4>
					 <a href="book_tickets.php" class="btn btn-primary" style="margin-top:20px">Book Now</a>
                  </div>
               </div>
               
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img src="./Formcss/Images/printticket.jpg" alt="#"/></i>
                     <h4>Print the ticket</h4>
					 <a href="pnr.php" class="btn btn-primary" style="margin-top:20px">Print Now</a>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- end Features -->

    <script src="Formjs/jquery.min.js"></script>
    <script src="Formjs/popper.min.js"></script>
    <script src="Formjs/bootstrap.bundle.min.js"></script>
    <script src="Formjs/jquery-3.0.0.min.js"></script>
    <script src="Formjs/plugin.js"></script>
    <!-- sidebar -->
    <script src="Formjs/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Formjs/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
