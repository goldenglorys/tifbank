<?php  
require 'dbcon.php';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$delete=mysqli_query($con,"delete from customer_tb where customer_id = '$id'");
	if ($delete) {
		echo "Successfull";
	}
	else{
		echo "Unsuccessful";
	}
}
?>