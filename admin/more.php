<?php
require 'dbcon.php';
$id = $_GET['id'];
$resultSet=mysqli_query($con,"select * from customer_tb where customer_id ='$id'");
$resultSet2=mysqli_query($con,"select * from account_statement where customer_id ='$id'");
$r=mysqli_fetch_array($resultSet);
$r1=mysqli_fetch_array($resultSet2);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mt-5">
			<div class="card">
				<div class="card-header text-center"><h4>Full Details</div>
				<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<td>Firstname: </td>
						<td><?php echo $r[firstname]; ?></td>
					</tr>
					<tr>
						<td>Lasttname: </td>
						<td><?php echo $r[lastname]; ?></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><?php echo $r[gender]; ?></td>
					</tr>
					<tr>
						<td>Birth Date: </td>
						<td><?php echo $r[date_of_birth]; ?></td>
					</tr>
					<tr>
						<td>Country: </td>
						<td><?php echo $r[nationality]; ?></td>
					</tr>
					<tr>
						<td>Birth State: </td>
						<td><?php echo $r[state_of_birth]; ?></td>
					</tr>
					<tr>
						<td>Home Address: </td>
						<td><?php echo $r[home_address]; ?></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><?php echo $r[email]; ?></td>
					</tr>
					<tr>
						<td>Contact: </td>
						<td><?php echo $r[phone_number]; ?></td>
					</tr>
					<tr>
						<td>Open Date: </td>
						<td><?php echo $r1[opening_date]; ?></td>
					</tr>
					<tr>
						<td>Open Time: </td>
						<td><?php echo $r1[opening_time]; ?></td>
					</tr>
					<tr>
						<td>Account Type: </td>
						<td><?php echo $r1[account_type]; ?></td>
					</tr>
					<tr>
						<td>Account Number: </td>
						<td><?php echo $r1[account_number]; ?></td>
					</tr>
				</table>
				<div class="col-md-4">
				  
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<!-- <?php
require 'dbcon.php';
$id = $_GET['id'];
$resultSet=mysqli_query($con,"select * from customer_tb where customer_id ='$id'");
$resultSet2=mysqli_query($con,"select * from account_statement where customer_id ='$id'");
echo "<div class='container-fluid'><div class='row'><div class='col-md-6 mt-5'><div class='card'><div class='card-header text-center'><h4>Full Details</div><div class='card-body'><table class='table table-bordered'>";
$r=mysqli_fetch_array($resultSet);
$r1=mysqli_fetch_array($resultSet2);
echo "<script>alert('$r[firstname]')</script>";
echo "<div>Firstname: ".$r['firstname']."</div><div>Lastname: $r[lastname]</div><div>Gender: $r[gender]</div><div>Birth Date: $r[date_of_birth]</div><div>Country: $r[nationality]</div><div>Birth State: $r[state_of_birth]</div><div>Home Address: $r[home_address]</div><div>Email: $r[email]</div><div>Contact: $r[phone_number]</div><div>Open Date: $r1[opening_date]</div><div>Open Time: $r1[opening_time]</div><div>Account Type: $r1[account_type]</div><div>Account Number: $r1[account_number]</div>";
echo "</table><div class='col-md-4'> </div></div></div></div></div></div>";
				
?> -->