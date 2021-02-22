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
	  margin:10px;
	  height:45px;
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
</style>
</head>
<body>
<div class="container-fluid ">
	<div class="row">
		<div class="col-md-12">
			<nav class="fixed-top navbar" style="height:80px;background-color:#85BEED;"> 
           <a class="navbar-link" href="home.php" style="font-size:25px;margin-bottom:-30px;color:#0066cc;"><img src="s.png" style="height:90px;width:100px;margin-top:-35px;"></a><button id="log" onclick="location.href='logout.php'">Log Out</button>
          </nav>
          <div class="col-md-7 offset-2">
          <div class="card">
          	<div class="card-header text-center text-success"><h4>Transfer Details</h4></div>
          	<div class="card-body">
          		<form action="gettransfer.php" method="post">
              <div>Receiver's Account Name: <input type="text" name="name" class="form-control" placeholder="The account name"></div>
              <div>Receiver's Account Number: <input type="text" name="number" class="form-control" placeholder="The account number"></div>
              <div>Amount: <input type="text" name="amount" class="form-control" placeholder="Amount in numbers"></div>
              <div>Transfer from: <input type="text" name="from" class="form-control" placeholder="Your name"></div>
<!--               <div>Date: <input type="date" name="date" class="form-control"></div>
 -->              <div class="text-center"><input type="submit" name="" value="Send" class="btn btn-success mt-3"></div>
               </form>
          	</div>
          </div>
          </div>
          <div class="sidenav bg-light" id="sidenav">
           <a href="deposit.php">Deposit</a>
           <a href="withdraw.php">Withdraw</a>
           <a href="balance.php">Check Balance</a>
           <a href="transfer.php">Transfer Fund</a>
        </div>
		</div>
	</div>
</div>
</body>
</html>