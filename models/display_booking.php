<?php
@session_start();
include_once '../includes/connection.php';



$sql="select * from booking";

$query = mysqli_query($conn,$sql);

$response['data']=array();

//$count=count($query);

$i = 0;
while($result=mysqli_fetch_array($query)){
	
	
	

$response['data'][]=array(

	           '<span>' . ++$i . '</span>',
	
			    '<span>' . $result['first_name'] . '</span>',
			    '<span>' . $result['last_name'] . '</span>',
			    '<span>' . $result['date'] . '</span>',
			    '<span>' . $result['time'] . '</span>',
			    '<span>' . $result['phone'] . '</span>',
			    '<span>' . $result['message'] . '</span>'
			    // '<span><a title="Delete Item" onClick="deleteItem(\'' . $result['id'] . '\')"class="btnDel" style="color:red;padding:10px;"><i class="fa fa-trash fa-lg"></i></a>

       //            <title="Update Item" onClick="updateItem(\'' . $result['id'] . '\')"  class="btnupdate" style="color:red;padding:15px;"><i class="fa fa-edit fa-lg"></i></span>'
                

				);


}
echo json_encode($response);
?>










