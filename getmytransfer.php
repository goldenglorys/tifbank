<?php session_start();
require 'dbcon.php';
$from = $_POST['type1'];
$to = $_POST['type2'];
$amt = $_POST['amount'];
date_default_timezone_set("Africa/Lagos");
$settime = date("h:i:sa");
$dates = date("Y-m-d"); 
$yes = false;
$no = false;
if($from=='Savings Acct'){
	$query = mysqli_query($con,"SELECT * from account_statement where account_name = '$_SESSION[name]' and account_type = '$from'");
    while ($q=mysqli_fetch_array($query)) {
    		$frmname = $q['account_name'];
	        $frmnum = $q['account_number'];
	        $bal = $q['account_balance'] - $amt;
	        $acctid = $q['account_id'];
	        $yes = true;
    }
    if($yes){
    $query1 = mysqli_query($con,"SELECT * from account_statement where account_name = '$_SESSION[name]' and account_type = '$to'");
	    while ($q1=mysqli_fetch_array($query1)) {
	    		$toname = $q1['account_name'];
		        $tonum = $q1['account_number'];
		        $urbal = $amt + $q1['account_balance'];
		        $acctids = $q1['account_id'];
		        $no = true; 
	    }
    }
    if($no){
    	$query2 = mysqli_query($con,"UPDATE account_statement set account_balance = '$bal' where account_name = '$_SESSION[name]' and account_type = '$from'");
    	$query22 = mysqli_query($con,"UPDATE account_statement set account_balance = '$urbal' where account_name = '$_SESSION[name]' and account_type = '$to'");
    	if ($query22) {
		$query3 = mysqli_query($con,"INSERT into transfer_history set from_name = '$frmname',from_account = '$frmnum',to_name = '$toname',to_account = '$tonum',amount = '$amt',dates = '$dates',clock = '$settime',from_account_id =  '$acctid',to_account_id = '$acctids'");
	    }
    }
    if ($query3) {
		echo "<script>alert('Transfer Successful')</script>";include 'home.php';
	}
}    else{echo mysqli_error($con);}
?>