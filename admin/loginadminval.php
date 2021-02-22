<?php session_start();
require 'dbcon.php';
$email=$_POST['mail'];
$pwd=$_POST['password'];
$result=mysqli_query($con,"select * from administrator_tb where email = '$email' and password = '$pwd'");
$tell=true;
	while ($rows=mysqli_fetch_array($result)) {
		$tell=false;
	}
	if ($tell) {
	    echo mysqli_error($con);
	    $errmsg="Incorrect inputs";
	    include 'index.php';
    }
    else{
    	 $_SESSION['admin']=$email;
       	 include 'adminboard.php';
    }
?>