
	
	$(document).ready(function(){

	 getAllCategory();
	 getCart();

	 function getAllCategory()
	 {
	 	$.ajax({
	 		url:"models/get_product.php",
	 		method:"POST",
	 		dataType:"html",
	 		
	 		success:function(res)
	 		{
	 			$("#main_menu").html(res);
	 			
	 			load_cart_item_number();
	 			
	 		}
	 	})
	 }

	 $(document).on('click', '.product_add', function(){
	 	var id = $(this).attr('id');
	 	console.log(id);
	 	var name = $(this).data('name');
	 	console.log(name);
	 	var description = $(this).data('description');
	 	console.log(description);
	 	var cost = $(this).data('cost');
	 	console.log(cost);
	 	var Images = $(this).data('images');
	 	console.log(Images);
	 	
	 	$.ajax({
	 		url:"models/add_to_cart.php",
	 		method:"POST",
	 		
	 		data:{id:id,name:name,description:description,cost:cost,Images:Images},
	 		
	 		success:function(res)
	 		{
	 			getAllCategory();
	 			
	 			toastr.success(res,{timeOut:3000});
	 			

	 			
	 		}
	 	})

	 	
	 	
	 	})
	 function load_cart_item_number() {
      $.ajax({
        url: 'models/add_to_cart.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }

    function getCart()
	 {
	 	$.ajax({
	 		url:"models/display_product.php",
	 		method:"POST",
	 		dataType:"html",
	 		
	 		success:function(res)
	 		{
	 			$("#display_cart").html(res);
	 		}
	 	})
	 }
	
	


	 
	});
	 