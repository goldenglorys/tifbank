<?php
require 'dbcon.php';
$acctname = $_POST['accountname'];
$acctnum = $_POST['accountnumber'];
$performance = 'Deposit';
$amt = $_POST['amount'];
$deps = $_POST['depositor'];
$phones = $_POST['phone']; 
date_default_timezone_set("Africa/Lagos");
$settime = date("h:i:sa");
$day = date("Y-m-d");
$perform = mysqli_query($con,"SELECT * from account_statement where account_number = '$acctnum'");
        while ($perf=mysqli_fetch_array($perform)) {
            $balance =$amt + $perf['account_balance'];
            $verify = $perf['account_name'];
            $acctid = $perf['account_id'];
        }
  if($acctname!==$verify){echo "<script>alert('Incorrect Inputs')</script>";include 'deposit.php';}
  else{
        $deposition = mysqli_query($con,"UPDATE account_statement set account_balance = '$balance' where account_number = '$acctnum'");
        if($deposition){
        $deposithistory = mysqli_query($con,"INSERT into transaction_details set account_name ='$acctname',account_number = '$acctnum',action = '$performance',amount = '$amt',perform_by = '$deps',phone_number = '$phones',dates = '$day',clock = '$settime',account_id = '$acctid'");
        }
        if($deposithistory){echo "<script>alert('Transaction Complete')</script>";include 'home.php';}
        else{echo mysqli_error($con);}
  }
?>