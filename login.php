<!-- 
<html>
	<head>
		<title>
			Account Login
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
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	</head>
	<body>
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
		<br>
		<br>
		<br>
		<form class="float_form" style="padding-left: 40px" action="login_verify.php" method="POST">
			<fieldset>
				<legend>Login Details:-</legend>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong>User Type:</strong><br>
				Customer <input type='radio' name='user_type' value='Customer' checked/> Administrator <input type='radio' name='user_type' value='Administrator'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
		</form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	</body>
</html> -->

<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Customer Login</title>
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
                    <h2>LOGIN AS CUSTOMER</h2>
                    <span>Enter The Correct Details Here And Login Into Our Website</span>
                 </div>
              </div>
           </div>
		   <?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red;font-size:45px'>Invalid Username/Password</strong>
						<br><br>";
					}
						?>
           <div class="row">
              <div class="col-md-4">
			  <!-- <form class="float_form" style="padding-left: 40px" action="login_verify.php" method="POST"> -->
                 <form id="request" class="main_form" style="border-radius: 20px;background:#212c67;margin-top:70px" action="login_verify.php" method="POST">
                    <div class="row">
                       <div class="col-md-12 ">
                          <input class="contactus" type="text" name="username" placeholder="Enter your passenger ID" required> 
                       </div>
                       <div class="col-md-12">
					   <input class="contactus" type="password" name="password" placeholder="Enter your password" required>                        
                       </div>
					   <strong style="color:f6c2d7;">User Type:</strong>
			 <span style="color:f6c2d7;">Customer</span>	 <input  type='radio' name='user_type' value='Customer' checked/>
				<br>
				<span style="color:f6c2d7;">Administrator </span> <input style="color:f6c2d7;" type='radio' name='user_type' value='Administrator'/>

                       <div class="col-sm-12">
					   <input class="send_btn" type="submit" name="Login" value="Login">
                          <!-- <button class="send_btn">Login</button> -->
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