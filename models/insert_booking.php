<?php
include('../includes/connection.php');

	$fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];

	$checkquery = "select * from booking where first_name = '$fname' And last_name = '$lname' And phone = '$phone'";
	$query = mysqli_query($conn,$checkquery);
	$phonecount = mysqli_num_rows($query);

    if($phonecount>0)
    {
        echo "Your Booking data already done Please check! ";
    }
    else
    {

$insertquery = "INSERT INTO `booking` (
 
  `first_name`,
  `last_name`,
  `date`,
  `time`,
  `phone`,
  `message`
  
)
VALUES
  (
    '$fname',
    '$lname',
     '$date',
    '$time',
    '$phone',
    '$message'
    
  )";

$iquery =mysqli_query($conn,$insertquery);
if($iquery)
 {
  echo "Thanks For Your Booking";

}
else
{
  echo "sorry";
}
    }


?>