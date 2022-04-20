<?php
include '../includes/connection.php';
if (isset($_POST['id']))
{
$id = $_POST['id'];
$name = $_POST['name'];
$Images = $_POST['Images'];
$cost = $_POST['cost'];
$description = $_POST['description'];

$checksql = "select * from cart where product_id ='$id'";
$checkquery = mysqli_query($conn,$checksql);
if(mysqli_num_rows($checkquery) > 0)
{
	echo "Product is already added into cart";
}
else
{
$sql = "INSERT INTO `cart` ( `name`, `description`,`cost`,`Images`,`product_id`,total_cost)VALUES
  ('$name', '$description','$cost', '$Images', '$id','$cost')";
  


  $query=mysqli_query($conn,$sql);
  if($query)
  {
  	echo "Product added into cart";
  }
  else
  {
  	echo "sorry there is something wrong";
  }
}
}

if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item')
 {
	 $sqlcount = "SELECT * FROM cart";
	 $querycount = mysqli_query($conn,$sqlcount);
	 $rows = mysqli_num_rows($querycount);


	  echo $rows;
	}
  if (isset($_GET['clearAll'])  && isset($_GET['clearAll']) == 'clear_All')
   {
    $alldeletesql = "Delete from cart";
    $alldeletequery=mysqli_query($conn,$alldeletesql);
    header('location:cart.php');
       

    
  }
  if (isset($_GET['itemid'])) {
    $id = $_GET['itemid'];
$delete_q = "DELETE
FROM
  `cart`
WHERE `id` = '$id';
  ";

 $query=mysqli_query($conn,$delete_q);
 if($query)
 {
  echo'<script>  alert("Product deleted from cart sucessfully");   </script>';
 header('location:../cart.php');
}
  }

  if (isset($_POST['qty'])) {
    $qty = $_POST['qty'];
    $pid = $_POST['pid'];
    $pprice = $_POST['pprice'];
     $tprice = $qty * $pprice;
     $sqlupdate = "UPDATE
  cart
SET
  
  `total_cost` = '$tprice',
  
  `qty` = '$qty'
  
WHERE `id` = '$pid';";

echo $sqlupdate;

$queryupdate=mysqli_query($conn,$sqlupdate);

  }
  
 


?>