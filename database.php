
<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password);

//-----------------------------------------------  DATABASE CREATION  -------------------------------

$sql = "CREATE DATABASE flightjet";
$x = mysqli_query($connect,$sql);
// if(!($x)){
//   echo "Database was not created successfully because of this error: ".mysqli_error($connect);
// }
$db='flightjet';
$conn =mysqli_connect($servername,$username,$password,$db);

//-----------------------------------------------  adminlogins CREATION  -------------------------------


$y="CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
)";

$result = mysqli_query($conn,$y);
if(!$result){
  echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
}

 $addtoAdmin = "INSERT INTO  `admin` (`admin_id`, `pwd`, `staff_id`, `name`, `email`) VALUES
('admin', 'Admin#123', 'admin', 'AdminName', 'admin1234@gmail.com')";
$result1 = mysqli_query($conn,$addtoAdmin);
 



//-----------------------------------------------  customerlogins CREATION  -------------------------------

$y1 = "CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(20) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL
)";

$result2 = mysqli_query($conn,$y1);

// "INSERT INTO `customer` (`customer_id`, `pwd`, `name`, `email`, `phone_no`, `address`) VALUES
// ('aadith', 'aadith007', 'aadith_name', 'aadith_email', '12345', 'aadith_address'),
// ('Apple', 'abhishek', 'Abhijeeth', 'gmail@gmail.com', '+9185564764', 'hgsjhgdjfdjdgf'),
// ('blah', 'blah blah', 'blah', 'blah@gmail.com', '993498570', 'blah'),
// ('charles', 'charles_pass', 'Charles', 'charles@gmail.com', '9090909090', 'Bangalore'),
// ('chirag008', 'chirag', 'Chirag G', 'chirag@gmail.com', '8080808080', 'Kuldlu Gate'),
// ('harryroshan', 'passpasshello', 'Harry Roshan', 'harryroshan1997@gmai', '9845713736', '#381, 1st E Main,'),
// ('KUMAR', '123456789', 'RUKO SINGH', 'KUMAR@GMAIL.COM', '1234567890', 'INDIANINDIA'),
// ('SANCHIT', '123456', 'SANCHIT KUMAR', 'sanchit.muz@gmail.com', '1234569870', 'India')";


?>