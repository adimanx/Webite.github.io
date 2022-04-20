<?php
include('../includes/connection.php');

	$name = $_POST["name"];
	$email = $_POST["email"];
	$sub = $_POST["subject"];
	$msg = $_POST["message"];
	

	$checkquery = "select * from contact where email = '$email' ";
	$query = mysqli_query($conn,$checkquery);
	$phonecount = mysqli_num_rows($query);

    if($phonecount>0)
    {
        echo "Your Email data already Exist Please check! ";
    }
    else
    {

$insertquery = "INSERT INTO `coffe_shop`.`contact` (
 
  `name`,
  `email`,
  `subject`,
  `message`
)
VALUES
  (
    
    '$name',
    '$email',
    '$sub',
    '$msg'
  )";

$iquery =mysqli_query($conn,$insertquery);
if($iquery)
 {
  echo "Thanks For Your Feedback";

}
else
{
  echo "sorry";
}
    }


?>