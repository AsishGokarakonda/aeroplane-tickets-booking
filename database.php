
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


$flightDet ="	CREATE TABLE IF NOT EXISTS `flight_details` (
  `flight_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_business` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_business` int(10) DEFAULT NULL,
  `jet_id` varchar(10) DEFAULT NULL
  )";

  $result3 = mysqli_query($conn,$flightDet);
  if(!$result3){
    echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
  }

  $addFliDet = "INSERT INTO `flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) VALUES 
  ('AA111', 'chennai', 'rajahmundry', '2019-12-26', '2019-12-27', '21:00:00', '01:00:00', '195', '96', '5000', '7500', '10001'),
  ('AA101', 'bangalore', 'mumbai', '2019-12-01', '2019-12-02', '21:00:00', '01:00:00', '195', '96', '5000', '7500', '10001'),
  ('AA102', 'bangalore', 'mumbai', '2019-12-01', '2019-12-01', '10:00:00', '12:00:00', '200', '73', '2500', '3000', '10002'),
  ('AA103', 'bangalore', 'chennai', '2019-12-03', '2019-12-03', '17:00:00', '17:45:00', '150', '75', '1200', '1500', '10004'),
  ('AA104', 'bangalore', 'mysore', '2019-12-04', '2019-12-04', '09:00:00', '09:17:00', '37', '4', '500', '750', '10003'),
  ('AA106', 'bangalore', 'hyderabad', '2019-12-01', '2019-12-01', '13:00:00', '14:00:00', '150', '75', '3000', '3750', '10004'),
  ('AIR707MXPA', 'PATNA', 'MUMBAI', '2019-09-01', '2019-09-01', '10:00:00', '18:00:00', '232', '128', '7500', '12000', 'AIR707MAX'),
  ('AIRBUS69BA', 'bangalore', 'chennai', '2019-07-19', '2019-07-19', '10:00:00', '13:00:00', '69', '89', '6500', '7800', 'AIRBUS69'),
  ('AIRBUS707P', 'bangalore', 'Patna', '2019-08-19', '2019-08-19', '00:00:00', '18:00:00', '75', '65', '6969', '7856', 'AIRBUS707'),
  ('AIRBUS70BA', 'bangalore', 'chennai', '2019-08-19', '2019-08-19', '10:00:00', '15:00:00', '523', '76', '4523', '8652', 'AIRBUS70'),
  ('AIRBUS70PA', 'bangalore', 'Patna', '2019-08-19', '2019-08-19', '10:01:00', '18:00:00', '498', '65', '5788', '6966', 'AIRBUS70'),
  ('BOING707PA', 'KOLKATTA', 'PATNA', '2019-08-25', '2019-08-25', '10:00:00', '13:00:00', '400', '21', '4500', '7000', 'BOING707')";
  $result4 = mysqli_query($conn,$addFliDet);
?>