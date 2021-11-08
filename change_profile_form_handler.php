<html>
	<head>
		<title>Add New User</title>
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
		<?php
        echo"
        <header>
        <nav class=\"navbar navbar-expand-lg navbar-light \" >
              <div class=\"container\">
                <a href=\"index.php\" class=\"navbar-brand\">Flight<span class=\"text-primary\">jet</span></a>
        
                <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
        
                <div class=\"navbar-collapse collapse\" id=\"navbarContent\">
                  <ul class=\"navbar-nav ml-auto pt-3 pt-lg-0\">
                    <li class=\"nav-item active\">
                      <a href=\"customer_homepage.php\" class=\"nav-link\">Home</a>
                    </li>
                    <li class=\"nav-item disabled\">
                      <a href=\"index.php\" class=\"nav-link\">About Us</a>
                    </li>
                    <li class=\"nav-item\">
                      <a href=\"login_page.php\" class=\"nav-link\">Login</a>
                    </li>
                    <li class=\"nav-item\">
                      <a href=\"new_user.php\" class=\"nav-link\">Sign Up</a>
                    </li>
                  </ul>
                  <div class=\"sign_btn\" style=\"margin-left:40px\"><a href=\"#\"><img src=\"./Formcss/Images/profileIcon2.png\" alt=\"\"></a></div>
                </div>
              </div> <!-- .container -->
            </nav> <!-- .navbar -->
            </header>
        ";
            DEFINE('DB_USER','root');
            DEFINE('DB_PASSWORD','');
            DEFINE('DB_HOST','localhost');
            DEFINE('DB_NAME','flightjet');

            $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
            OR dies('Could not connect to MySQL:' .
                mysqli_connect_error());
            
			if(isset($_POST['Submit']))
			{
               
				$data_missing=array();
				if(empty($_POST['ChangeName']))
				{
                    
					$data_missing[]='User Name';
				}
				else
				{
                    
					$change_name=trim($_POST['ChangeName']);
				}
				if(empty($_POST['ChangeEmail']))
				{
					$data_missing[]='Password';
				}
				else
				{
					$change_email=$_POST['ChangeEmail'];
				}
				if(empty($_POST['ChangePhone']))
				{
					$data_missing[]='Email ID';
				}
				else
				{
					$change_phone=trim($_POST['ChangePhone']);
				}

				if(empty($_POST['ChangeAddress']))
				{
					$data_missing[]='Name';
				}
				else
				{
					$change_address=$_POST['ChangeAddress'];
				}
				if(empty($_POST['ChangePassport']))
				{
					$data_missing[]='Phone No.';
				}
				else
				{
					$change_passport=trim($_POST['ChangePassport']);
				}
            }
            
            // echo $change_name;
            // echo $change_email;
            // echo $change_address;
            // echo $change_phone;
            // echo $change_passport;

				if(empty($data_missing))
				{
					// echo"heelo";

					// require_once('Database Connection file/mysqli_connect.php');
					$query="UPDATE `customer` SET `name`='$change_name',`email`='$change_email',`phone_no`='$change_phone',`address`='$change_address',`passport`='$change_passport'";
					$result=mysqli_query($dbc,$query);
                    // echo $result;
					if ( false===$result ) {
						printf("error: %s\n", mysqli_error($dbc));
					  }
					if($result==1)
					{
						echo "Changed Successfully";
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error($dbc);
						mysqli_close($dbc);
					}
				}
			// 	else
			// 	{
			// 		echo "The following data fields were empty! <br>";
			// 		foreach($data_missing as $missing)
			// 		{
			// 			echo $missing ."<br>";
			// 		}
			// 	}
			
			// else
			// {
			// 	echo "Submit request not received";
			// }
		?>
	</body>
</html>