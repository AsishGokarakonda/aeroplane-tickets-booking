<!-- 
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flightjet Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
    <body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 

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


		<form class="center_form" action="new_user_form.php" method="POST" id="new_user_from">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
			<br>
			<table cellpadding='10'>
				<strong>ENTER LOGIN DETAILS</strong>
				<tr>
					<td>Enter a valid username  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your desired password  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your email ID</td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
				<tr>
					<td>Enter your name  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your phone no.</td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your address</td>
					<td><input type="text" name="address" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
			<br>
		</form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</body>
    
</html> -->

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Customer Signup</title>
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
    
   </head>
<body>
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
                            <a class="nav-link" href="aboutus.php">About Us</a>
                         </li>
						 <li class="nav-item">
                            <a class="nav-link" href="login_page.php">Login</a>
                         </li>
                       </ul>
                    </div>
                 </nav>
              </div>
           </div>
        </div>
     </div>
  </header>
    <div class="request">
        <div class="container" >
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>SIGNUP AS CUSTOMER</h2>
                    <span>Fill Both The Forms And SignUp Into Our Website</span>
					<p>(Passenger ID is nothing but Username)</p>
                 </div>
              </div>
           </div>

           <div class="row">
              <div class="col-md-4">
			  <!-- <form class="center_form" action="new_user_form.php" method="POST" id="new_user_from"> -->
                 <form id="request" class="main_form" action="new_user_form.php" method="POST"  style="border-radius: 20px;background:#212c67;margin-top:70px;width:500px" >
                    <div class="row">
                       <div class="col-md-12 ">
                          <input class="contactus" type="text" name="username" placeholder="Enter your passenger ID" required> 
                       </div>
					   <div class="col-md-12">
					   <input class="contactus" type="password" name="password" placeholder="Enter your password" required>                        
                       </div>
					   <div class="col-md-12">
					   <!-- <input type="text" name="email" required> -->
					   <input class="contactus" type="text" name="email"  placeholder="Enter your Email ID" required>                        
                       </div>

                    </div>
                    <div class="row">
                       <div class="col-md-12 ">
					   <!-- <input type="text" name="name" required> -->
                          <input class="contactus" type="text" name="name" placeholder="Enter Your Full Name" required> 
                       </div>
                       <div class="col-md-12">
					   <!-- <input type="text" name="address" required> -->
					   <input class="contactus" type="text" name="passport"  placeholder="Enter Your passport number" required>                        
                       </div>
                       <div class="col-md-12">
					   <!-- <input type="text" name="phone_no" required> -->
					   <input class="contactus" type="text" name="phone_no" placeholder="Enter Your Phone Number" required>                        
                       </div>
					   <div class="col-md-12">
					   <!-- <input type="text" name="address" required> -->
					   <input class="contactus" type="text" name="address"  placeholder="Enter Your Address" required>                        
                       </div>
                       <div class="col-sm-12">
					   <input class="send_btn" type="submit" value="Submit" name="Submit">
                       <!-- <input type="submit" value="Submit" name="Submit"> -->
                       </div>
                    </div>
                 </form>
              </div>

              <div class="col-md-8">
                 <div class="back_img">
                    <figure><img src="./Formcss/flightpng.png" alt="#"/></figure>
                 </div>
              </div>

						
           </div>
        </div>
     </div>
</body>
<script src="Formjs/jquery.min.js"></script>
<script src="Formjs/popper.min.js"></script>
<script src="Formjs/bootstrap.bundle.min.js"></script>
<script src="Formjs/jquery-3.0.0.min.js"></script>
<script src="Formjs/plugin.js"></script>
<!-- sidebar -->
<script src="Formjs/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="Formjs/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</html> 
