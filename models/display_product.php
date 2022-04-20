<?php

include_once '../includes/connection.php';



$sql="select * from cart";

$query = mysqli_query($conn,$sql);
$finalcost = 
$output = '';
while($result=mysqli_fetch_assoc($query))
 {
 	?>
  $output .= '

  <tr class="text-center">
    <td class="product-remove"><a href="models/add_to_cart.php?itemid=<?= $result['id'] ?>" title="Delete Item" class="icon-close form-control btnDel" onclick="return confirm('Are you sure want Delete this Product?');"> </a></td>
    
   
   <td class="image-prod"><img class="menu-img img mb-4" width="100px;" height="100px;"src="images/<?php echo $result["Images"];?>" ></td>
   <input type="hidden" name="id" class="cart_id" value="<?php echo $result["id"]; ?>">
      <input type="hidden" name="cost" class="cart_cost" value="<?php echo $result["cost"]; ?>">


   <td class="product-name"><h3><?php echo $result["name"]; ?></h3></td>

   <td><p><?php echo $result["description"]; ?></p></td>
   <td class="price" id="cost"><?php echo $result["cost"]; ?></td>&nbsp;
   
   <td><input class="form-control cart_qty" id="qty" type="number" name="qty"  value="<?php echo $result["qty"]; ?>" oninput="calc()"  /></td>
   <td> <b><span id="total"><?php echo $result["total_cost"]; ?></span></b></p></td>
   
    </tr>
  ';
 <?php }
echo $output
?>


<script type="text/javascript">
	 $(".cart_qty").on('change', function() { 
 var $el = $(this).closest('tr');
      

      var pid = $el.find(".cart_id").val();
      var pprice = $el.find(".cart_cost").val();
      var qty = $el.find(".cart_qty").val();
       location.reload(true);
      
      $.ajax({
        url: 'models/add_to_cart.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    
  
});
	
</script>










