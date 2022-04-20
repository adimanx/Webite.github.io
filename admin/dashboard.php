<?php include_once '../includes/header.php';
 ?>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Coffe Shop Management</p>
                <li>
                     <a href="">Home</a>
                   
                </li>
               
                <li>
                    <a  id="booking">Booking Table</a>
                </li>
                
                <li>
                    <a id="feed">Feedback</a>
                </li>
                <li>
                    <a href="#">Categories</a>
                </li>
                 <li>
                    <a id="product">Product Display</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    

<!-- The Modal -->


                    <div class="collapse navbar-collapse" id="navbarSupportedContent" align="right">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link">Namrata jaiswar</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
             </nav>
             <br>




            <div id="home">
            	<h1 class="text-center bg-dark text-white">Welcome to admin Dashboard</h1>

            	
            </div>

            <div id="d3"></div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript">
    	$("#booking").click(function(){
    		$("#home").hide();
    		$("#d3").load("booking.php");
    	})
    	$("#feed").click(function(){
    		$("#home").hide();
    		$("#d3").load("feedback.php");
    	})
        $("#product").click(function(){
            $("#home").hide();
            $("#d3").load("product.php");
        })
    </script>
</body>

</html>