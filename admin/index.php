<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Admin Login Panel</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<style type="text/css">
	span
	{
		color: red;

	}
</style>
</head>
<body>
	<div class="container_fluid">
		<h2 class="text-center text-danger bg-info" >Welcome To Login Panel</h2>
		<div class="row">
			<div class="col-md-6">
			<img src="../images/bg_2.jpg" alt="background_Images" width="100%" height="700px;">	
			</div>
			<div class="col-md-6" style="background-image: url(../images/bg_1.jpg); background-repeat: no-repeat; box-shadow: 10px 10px">

				
				<br>
				<br>
				<br>
				<h4 class="text-center text-dark bg-primary">Please Enter Your Login and Password</h4>

				<div style="padding: 50px; margin: 20px;">
			     <form id="login_form" method="POST">
                     <div class="form-group">
                      <label for="exampleInputEmail1"  class="text-white">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                      <span id="error_email"></span>
                      
                     </div>
                     <div class="form-group">
                     <label for="exampleInputPassword1" class="text-white">Password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                     <span id="error_passwprd"></span>
                     </div>
                    
                     <br>
                     <button type="button" id="login" name="login" class="btn btn-primary">Submit</button>
                  </form>
              </div>
			</div>
			
		</div>
		
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		$("#login").click(function(){
			if($('#email').val() == '')
    {
      alert("please enter email id");
    }
    if($('#password').val() == '')
    {
      alert("please enter password");
    }
    else
       {
      

        $.ajax
         ({
             url:"../models/login.php",
             method:"POST",
             data:$('#login_form').serialize(),
             success:function(res)
      
              {
                toastr.error(res,{timeOut:1000});
               window.location.href ="dashboard.php";
               }
       
           })
    
         }
    });


		});
		
	</script>

</body>
</html>