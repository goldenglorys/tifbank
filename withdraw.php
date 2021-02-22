<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <title></title>
   <style>
    .card{margin-top: 85px}
    .sidenav {
    height: 100%; 
    width: 15%;
    position: fixed; 
    top: 0;
    left: 0;
    padding-top: 100px; 
    background: #7EA9DA;
    /*border-right: 2px solid;*/
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
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <nav class="fixed-top navbar" style="height:80px;background-color:#85BEED;"> 
           <a class="navbar-link" href="home.php" style="font-size:25px;margin-bottom:-30px;color:#0066cc;"><img src="s.png" style="height:90px;width:100px;margin-top:-35px;"></a>
           <h4 class="text-success" style="margin-left:10px;font-family:initial"><marquee><?php echo "Your account number is". " " .$_SESSION['number'];?></marquee></h4>
        </nav>
        <div class="col-md-6 offset-3">
            <div class="card">
              <div class="card-header text-center"><h3 class="text-success">Citizens Bank Witdrawal Page</h3></div>
              <div class="card-body">
              <div class="text-center"></div>
              <form action="getwith.php" method="post">
              <div>Account Name: <input type="text" name="accountname" class="form-control" placeholder="The account name" ></div>
              <div>Account Number: <input type="text" name="accountnumber" class="form-control" placeholder="The account number" ></div>
              <div>Amount: <input type="text" name="amount" class="form-control" placeholder="Amount in numbers"></div>
              <div>Withdrawer's Name: <input type="text" name="withdrawer" class="form-control" placeholder="Withdrawal's name" ></div>
              <div>Phone number: <input type="text" name="phone" class="form-control" placeholder="Phone number"></div>
<!--               <div>Date: <input type="date" name="date" class="form-control"></div>
 -->              <div>Pin: <input type="password" name="pin" class="form-control" > </div>
              <div class="text-center"><input type="submit" name="" value="Withdraw" class="btn btn-success mt-3"></div>
              </form>
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