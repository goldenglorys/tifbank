<?php 
require 'dbcon.php';
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$sex=$_POST['radio'];
$email=$_POST['mail'];
$pwd=$_POST['password'];
if ($fname=='') {
	echo "Sorry information incomplete";
}
else{
	$result=mysqli_query($con,"insert into administrator_tb (firstname,lastname,sex,email,password) values('$fname','$lname','$sex','$email','$pwd')");
	echo mysqli_error($con);

}
 ?>