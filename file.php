<?php
if (isset($_POST['save'])) {
	$myfile = fopen($_POST['filename'], "w") or die("Unable to open file!");
	$object = $_POST['input']; 
    fwrite($myfile, $object);
    $myfile = fopen($_POST['filename'], "r") or die("Unable to open file!");
    $show = fread($myfile,filesize($_POST['filename']));
    fclose($myfile);
}
// if (isset($_POST['load'])) {
// 	$myfile = fopen("newfile.html", "r") or die("Unable to open file!");
//     $show = fread($myfile,filesize("newfile.html"));
//     fclose($myfile);
// } require 'dbcon.php';
// $search = 'Micheal';
 // $query = mysqli_query($con,"SELECT * from customer_tb where customer_id > '0'");
 // while ($r=mysqli_fetch_array($query)) {
 //    $ids = $r['customer_id'];
 // 	$fname = $r['firstname']." ".$r['lastname'];
 // 	$email = $r['email'];
 // 	$phone = $r['phone_number'];
 // $statement[$fname] = array("id"=>$idnum,"name"=>$fname,"email"=>$email,"phone"=>$phone);
 // $cto = mysqli_query($con,"select * from account_statement where account_name like %".$search."% ");
 // $data = mysqli_fetch_array($cto,MYSQLI_ASSOC);
 // array_push($statement[$fname], $data);
 // $data='';
 // unset($data);
 // }
 // $show = json_encode($data);
 // if ($show) {echo "[".$show."]";}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>l
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div>
			    <form action="file.php" method="post">
				<textarea rows="10" cols="27" name="input"></textarea>
				<div>
					<input type="text" name="filename" required="" class="form-control" style="width:24%">
					<button name="save" type="submit">Save</button>
				</div>
				<div style="margin:-320px 0px 0px 550px;width:50%;height:246px;border:1px solid"><?php if (isset($show)) {echo $show;} ?></div>
<!-- 				<button name="load" type="submit" style="margin:10px 0px 0px 790px;">Load</button>
 -->			</div>
		</div>
	</div>
</div>
</body>
</html>
