<?php
include '../includes/connection.php';
$sql = "SELECT * FROM product WHERE type =  'main dish'";
$query = mysqli_query($conn,$sql);
$output='';
if(mysqli_num_rows($query) > 0)
{
foreach($query as $result)
{
	?>
	<div class="col-md-4 text-center" >
		              		
		              		
		              	  
	<div class="menu-wrap" id="main_menu">
		              		
	<img class="menu-img img mb-4" width="350px;" height="250px;"src="images/<?php echo $result["Images"];?>" >
		              	   	  <div class="text">
		              		  <h3><?php echo $result["name"]; ?></h3>
		              		  <p><?php echo $result["description"]; ?></p>
		              		 <p class="price"><span><?php echo $result["cost"]; ?></span></p>
		              		
		              		 
		              		 <p><a name="button_menu" id="<?php echo $result["id"]; ?>" data-images="<?php echo $result["Images"]; ?>" data-name="<?php echo $result["name"]; ?>" data-description="<?php echo $result["description"]; ?>" data-cost="<?php echo $result["cost"]; ?>" class="btn btn-primary btn-outline-primary product_add" id="product_add">Add to cart</a></p>

		              		</div>
		              		</div>
		              		</div>


<?php 
}
}

 




?>
