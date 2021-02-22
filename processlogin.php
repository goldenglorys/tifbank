<?php session_start();
require 'dbcon.php';
$email=$_POST['mail'];
$pwd=sha1($_POST['password']);
$result=mysqli_query($con,"select * from customer_tb where email = '$email' and password = '$pwd'");
$tell=true;
	while ($rows=mysqli_fetch_array($result)) {
		$_SESSION['id'] = $rows['customer_id'];
		$id = $_SESSION['id'];
		$tell=false;
	}
if ($tell) {
    $errmsg="Incorrect Email or Password";
    include 'index.php';
}
else{
	 $_SESSION['user']=$email;
	 $perform = mysqli_query($con,"SELECT * from account_statement where customer_id = '$id'");
        while ($perf=mysqli_fetch_array($perform)) {
            $_SESSION['number'] = $perf['account_number'];
            $_SESSION['name'] = $perf['account_name'];
            $_SESSION['balance'] = $perf['account_balance'];
        }
	 include 'home.php';
}
?>