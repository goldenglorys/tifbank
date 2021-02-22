<?php
require 'dbcon.php';
$acctname = $_POST['accountname'];
$acctnum = $_POST['accountnumber'];
$performance = 'Withdraw';
$amt = $_POST['amount'];
$withs = $_POST['withdrawer'];
$phones = $_POST['phone'];
$pass = sha1($_POST['pin']);
date_default_timezone_set("Africa/Lagos");
$settime = date("h:i:sa");
$day = date("Y-m-d"); 
$confirm = mysqli_query($con,"SELECT * from customer_tb where password = '$pass'");
while ($con2=mysqli_fetch_array($confirm)) {
	$password = $con2['password'];
  $bal = $con2['account_balance'];
}
if($pass==$password){
$perform = mysqli_query($con,"SELECT * from account_statement where account_number = '$acctnum'");
        while ($perf=mysqli_fetch_array($perform)) {
            $balance =$perf['account_balance']-$amt;
            $acctid = $perf['account_id'];
        }
        $deposition = mysqli_query($con,"UPDATE account_statement set account_balance = '$balance' where account_number = '$acctnum'");
              if($deposition){
              $deposithistory = mysqli_query($con,"INSERT into transaction_details set account_name ='$acctname',account_number = '$acctnum',action = '$performance',amount = '$amt',perform_by = '$withs',phone_number = '$phones',dates = '$day',clock = '$settime',account_id = '$acctid'");}
              if($deposithistory){echo "<script>alert('Transaction Complete')</script>";include 'home.php';}
}
else {echo "<script>alert('Incorrect Inputs')</script>";include 'withdraw.php';}
?>