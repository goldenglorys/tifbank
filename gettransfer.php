<?php 
require 'dbcon.php';
$toname = $_POST['name'];
$tonumber = $_POST['number'];
$amount = $_POST['amount'];
$from = $_POST['from'];
date_default_timezone_set("Africa/Lagos");
$settime = date("h:i:sa");
$dates = date("Y-m-d"); 
$done = false;
$done2 = false;
$query1 = mysqli_query($con,"SELECT * from account_statement where account_name = '$from'");
while ($q=mysqli_fetch_array($query1)) {
	$frmname = $q['account_name'];
	$frmnum = $q['account_number'];
	$bal = $q['account_balance'] - $amount;
	$acctid = $q['account_id'];
	$done = true;
}
if($done){
	$query11 = mysqli_query($con,"SELECT * from account_statement where account_name = '$toname'");
	while ($q=mysqli_fetch_array($query11)) {
		$toname = $q['account_name'];
		$tonum = $q['account_number'];
		$urbal = $amount + $q['account_balnace']; 
		$acctids = $q['account_id'];
		$done2 = true;
	}
}
if ($from!==$frmname) {echo "<script>alert('Incorrect Inputs')</script>";include 'deposit.php';}
else{
	if($done2){
		$query2 = mysqli_query($con,"UPDATE account_statement set account_balance = '$bal' where account_number = '$frmnum' and account_name ='$frmname'");
		$query22 = mysqli_query($con,"UPDATE account_statement set account_balance = '$urbal' where account_number = '$tonumber' and account_name ='$toname'");
	}
	if ($query2 && $query22) {
		$query3 = mysqli_query($con,"INSERT into transfer_history set from_name = '$from',from_account = '$frmnum',to_name = '$toname',to_account = '$tonumber',amount = '$amount',dates = '$dates',clock = '$settime',from_account_id =  '$acctid',to_account_id = '$acctids'");
	}
	if ($query3) {
		echo "<script>alert('Transfer Successful')</script>";include 'home.php';
	}
    else{echo mysqli_error($con);}
}
?>