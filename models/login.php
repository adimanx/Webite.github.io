<?php
include('../includes/connection.php');

	$email = $_POST["email"];
	$pass = $_POST["password"];
	

	$checkquery = "select * from login where email = '$email' And password = '$pass'";
	$query = mysqli_query($conn,$checkquery);
	$phonecount = mysqli_num_rows($query);

    if($phonecount>0)
    {
       echo'<script>  alert("Login Done Sucessfully");   </script>';
    }
    else
    {
        echo "Please Enter Correct Login and Password";
    }


?>