<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css"> 
<style type="text/css">
#log{
	  background: #3EA745;
	  color: #fff;
	  border: 2px solid #17A2B8;
	  margin:15px 0px 0px 10px;
	  height:45px;
      width: 10px
	  padding:2px;
	  border-radius:5px;
	  transition-duration: 0.5s;
}
#log:hover{
   background: #17A2B8;
}
.sidenav {
    height: 100%; 
    width: 15%;
    position: fixed; 
    top: 0;
    left: 0;
    padding-top: 100px; 
    background: #7EA9DA;
}
.sidenav a {
    padding: 15px 30px 10px 8px;
    text-decoration: none;
    font-size: 20px;
    display: block;
    color: #3EA745;
}
 .sidenav a:hover{
        background-color: #17A2B8;
        color: #fff;
        transition-duration: 1.0s;
        border-radius:5px;
}
.card{
  margin-left: 185px;
  margin-top: 90px;
}
.bg-info{font-size: 50px}
a:hover{text-decoration: none;}
</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		  <nav class="fixed-top navbar" style="height:80px;background-color:#85BEED;"> 
           <a class="navbar-link" href="home.php" style="font-size:25px;margin-bottom:-30px;color:#0066cc;"><img src="s.png" style="height:90px;width:100px;margin-top:-35px;"></a>
          </nav>
        <div class="col-md-7 offset-2">
        <div class="card">
			<div class="card-header"><h3 class="text-success text-center" style="margin-left:10px;font-family:initial"><?php echo "Hey!". " " .$_SESSION['name'] ?></h3></div>
			<div class="card-body">
              <div class="text-center"><h4>Your Balance in Saving Acct is: </h4></div> <div class="text-center text-light bg-info"><?php echo "N".$_SESSION['balance'];?></div>
			</div>
			<div class="text-center">
				<a href="">Balance in Checking Account</a>
			</div>
			<div class="card-footer">
				<marquee class="text-success">Thanks for banking with us!</marquee>
			</div>
		</div>
		</div>
        <div class="sidenav bg-light" id="sidenav">
           <a href="deposit.php">Deposit</a>
           <a href="withdraw.php">Withdraw</a>
           <a href="balance.php">Check Balance</a>
           <a href="transfer.php">Transfer Fund</a>
           <button id="log" onclick="location.href='logout.php'">Log Out</button>
        </div>
		</div>
	</div>
</div>
</body>
</html>