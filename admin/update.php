 <?php  
require 'dbcon.php';
if (isset($_POST['buttons'])) {
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$birthday = $_POST['bod'];
$email = $_POST['mail'];
$number = $_POST['number'];
$pwd = sha1($_POST['pword']);
$cpwd = sha1($_POST['cword']);
$done = mysqli_query($con,"UPDATE customer_tb set firstname = '$fname',lastname = '$lname',username = '$uname',date_of_birth = '$birthday',email = '$email',phone_number = '$number',password = '$pwd',confirm_password = '$cpwd' where customer_id='$id'");
if ($done) {include 'viewcust.php';}
// else{echo mysqli_error($con);}
}
else {
	$id = $_GET['id'];
	$pick = mysqli_query($con,"select * from customer_tb where customer_id='$id'");
		while ($row=mysqli_fetch_array($pick)) {	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<title></title>
 </head>
 <body>
 <div class="container">
 	<div class="row">
 		<div class="col-md-4">
            <form action='Update.php' method = 'post' >
	 	<input type="hidden" name="id" value= <?php echo $row['customer_id'];?> >
 		Firstname:<input type="text" name="fname" value= <?php echo $row['firstname']; ?> ><br>
            Lastname:<input type="text" name="lname" value= <?php echo $row['lastname']; ?> ><br>
            Username:<input type="text" name="uname" value= <?php echo $row['username']; ?> ><br>
            Date of Birth:<input type="date" name="dob" value= <?php echo $row['date_of_birth']; ?> ><br>
            Email:<input type="text" name="mail" value= <?php echo $row['email']; ?> ><br>
            Phone Number:<input type="text" name="number" value= <?php echo $row['phone_number']; ?> ><br>
            Password:<input type="password" name="pword" value= <?php echo $row['password']; ?> ><br>
            Confirm Password:<input type="password" name="cpword" value= <?php echo $row['confirm_password']; ?> ><br>
            <button name="buttons" type="submit">Update</button>
            </form>
 		</div>
 	</div>
 </div>	
 </body>
 </html>
 <?php 
		}
	}
 ?>