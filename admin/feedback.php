<?php include '../includes/header.php'; ?>


	<div class="container_fluid">
		<div class="table-responsive">
			<table class="table" id="response">
				<thead>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Subject</th>
					<<th>Message</th>
					
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

   

           var table = $('#response').DataTable({
            autoWidth: false,
            lengthChange: true,
            pageLength: 15,
            paging: true,
            bDeferRender:true,
            ordering: false,
  
   ajax: {
                url: '../models/display_feedback.php',
                type: 'POST',
                dataType: 'json',
               
            },
      
     
    });
         }
	</script>

