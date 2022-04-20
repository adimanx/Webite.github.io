<?php include '../includes/header.php'; ?>


	<div class="container_fluid">
		<div class="table-responsive">
			<table class="table" id="book_table">
				<thead>
					<th>Id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Date</th>
					<<th>Time</th>
					<th>Phone</th>
					<th>Message</th>
				</thead>
				<tbody>
					
				</tbody>
				
			</table>
		</div>
		
	</div>

	<script type="text/javascript">
		$(document).ready(function()
{
  //get all category
   fetch_data()
 });

   function fetch_data()
   {

   

           var table = $('#book_table').DataTable({
            autoWidth: false,
            lengthChange: true,
            pageLength: 15,
            paging: true,
            bDeferRender:true,
            ordering: false,
  
   ajax: {
                url: '../models/display_booking.php',
                type: 'POST',
                dataType: 'json',
               
            },
      
     
    });
         }
	</script>

