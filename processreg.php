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
$gender = $_POST['radio'];
$birthday = $_POST['bday'];
$nationality = $_POST['nationality'];
$state = $_POST['state'];
$home_add = $_POST['home'];
$email  =$_POST['email'];
$number = $_POST['phone'];
$branch = $_POST['branch'];
$unit = $_POST['unit'];
$accttype = "Savings Acct";
$acctname = $fname ." ". $lname;
$openfee = $_POST['amount'];
$pwd = sha1($_POST['password']);
$cpwd = sha1($_POST['confirm_password']);
$img = $_POST['image'];
$cont=true;
date_default_timezone_set("Africa/Lagos");
$opendate = date("Y-m-d");
$opentime = date("h:i:sa");
$image =$_FILES['passport']['name'];
$img = move_uploaded_file($_FILES ['passport']['tmp_name'],"passport/".$image);
	$result=mysqli_query($con,"INSERT into customer_tb (firstname,lastname,gender,date_of_birth,nationality,state_of_birth,home_address,email,phone_number,bank_branch,bank_unit,password,confirm_password,passport) values('$fname','$lname','$gender','$birthday','$nationality','$state','$home_add','$email','$number','$branch','$unit','$pwd','$cpwd','$image')");
	if ($result) {
		    $query=mysqli_query($con,"SELECT * from customer_tb where email = '$email'");
			while ($conts=mysqli_fetch_array($query)) {
				$cusid = $conts['customer_id'];
				$account=mysqli_query($con,"INSERT into account_statement set account_name = '$acctname',account_number = '$acct',account_balance = '$openfee',account_type = '$accttype',opening_date = '$opendate',opening_time = '$opentime',customer_id = '$cusid'");
				$cont=false;
			}
			if($account){echo '<script>alert("Your registration is successful")</script>';require 'index.php';;}
	}
	else{
		echo mysqli_error($con);
	}

?>