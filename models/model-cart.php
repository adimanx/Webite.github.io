<?php
	session_start();
	include('../includes/connection.php');

	// Add products into the cart table
	
	  $id = $_POST['id'];
	  $name = $_POST['name'];
	  $description = $_POST['description'];
	  $cost = $_POST['cost'];
	  $Images = $_POST['Images'];

	  $sql = "SELECT * FROM cart WHERE product_id = $id";
	  echo $sql;
	  $query = mysqli_query($conn,$sql);
	  $count = mysqli_num_rows($query);
	  if($count>0)
	  {
	  	echo "Item already added in your cart";
	  }
	  else
	  {
	  	$insertcart = "INSERT INTO `cart` (
 
  `name`,
  `description`,
  `cost`,
  `Images`,
  `product_id`
)
VALUES
  (
    
    '$name',
    '$description',
    '$cost',
    '$Images',
    '$id'
  );";
  echo $insertcart;
  $iquery =mysqli_query($conn,$insertcart);
  if($iquery)
 {
  echo "Item Added To Cart";

}
else
{
  echo "sorry";
}

	  }

	  

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item')
	 {
	   $sqlcart = "select * from cart";
	   $querycart = mysqli_query($conn,$sqlcart);

	   echo $querycart;
	 }


		
?>