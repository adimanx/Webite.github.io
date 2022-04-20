<?php
$hostname ="localhost";
$username = "root";
$password ="";
$dbname = "coffe_shop";

$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn)
{
  echo "not connected";
}

if(!mysqli_select_db($conn,'coffe_shop'))
{
  echo "database not selected";
}

?>