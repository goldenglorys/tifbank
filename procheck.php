<?php 
require 'dbcon.php';
for ($i=0; ; $i++) { 
	$acct = mt_rand(1,10000000000);
	if(strlen($acct)==10){
		break;
	}
}
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email  =$_POST['email'];
$number = $_POST['phone'];
$amt = $_POST['amount'];
$pass = sha1($_POST['password']);
$typ = 'Checking Acct';
date_default_timezone_set("Africa/Lagos");
$opendate = date("Y-m-d");
$opentime = date("h:i:sa");
$tip = false;
$query = mysqli_query($con,"SELECT * from customer_tb where email = '$email'");
while ($q=mysqli_fetch_array($query)) {
	$id = $q['customer_id'];
	$fn = $q['firstname'];
	$ln = $q['lastname'];
	$mail = $q['email'];
	$phone = $q['phone_number'];
	$pin = $q['password'];
	$acctname = $fname ." ". $lname;
	$tip = true;
}
if($tip){
	if($pass!==$pin){echo "<script>alert('Incorrect inputs')</script>";include 'opencheck.php';}
	else{
	   $query1 = mysqli_query($con,"INSERT into account_statement set account_name = '$acctname',account_number = '$acct',account_balance = '$amt',account_type = '$typ',opening_date = '$opendate',opening_time = '$opentime',customer_id = '$id'");	
	}
	if($query1){echo "<script>alert('Done')</script>";include 'home.php';}
}
else{
	echo mysqli_error($con);
}
?>