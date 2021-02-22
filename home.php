<?php session_start();
if ($_SESSION['user']){
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">  
	<title></title>
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
/*    background: #7EA9DA;
*/}
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
.dropdown-content {
    display: none;
    position: relative;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 10px 10px;
    z-index: 1;
}
.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
 <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="fixed-top navbar" style="height:80px;background-color:#85BEED;"> 
           <a class="navbar-link" href="home.php" style="font-size:25px;margin-bottom:-30px;color:#0066cc;"><img src="s.png" style="height:90px;width:100px;margin-top:-35px;"></a>
           <h4 class="text-success" style="margin-left:10px;font-family:initial"><marquee><?php echo "Welcome". " " .$_SESSION['name']." "."your account number is". " " .$_SESSION['number'];?></marquee></h4>
        </nav>
        <div class="card">
            <div class="card-header text-center text-info"><h3>Internet Banking Overview</h3></div>
                <div class="card-body row">
                <div class=" col-md-4">
                 Internet banking provides a full range of bankig services and products, which can be accessed conveniently from the comfort of your home or office.It allows your to access your latest balances and statements, makes payments and load beneficiaries without going into a branch.
                </div>
                <div class="col-md-8">
                   <h3 style="font-size:30px;font-family:ordinal;" class="text-center">Features</h3>
                   <h4>Monitor your Account</h4>
                   View and monitor activities on your accounts, views and print out statements in excel,csv and pdf, view images of issued cheques presented for clearing, also link up your accounts for a single Login view.
                   <h4>Transfer Funds</h4>
                   With just a few clicks you can Transfer money between your own accounts and 3rd party accounts within Global Bank and other banks.
                   <h4>Foreign Funds Transfer</h4>
                   Transfer foreign currency from your domiciliary account in Global Bank (USD,GBP and EURO) to any Bank within and outside Nigeria.
                   <h4>Pay your Bills</h4>
                   You can make bills payment instantly to over 30 billers (cable TV,credit card repayments,LCC toll fees,airtime top-up,internet subscription e.t.c)
                   <h4>Manage your Regular Payments</h4>
                   You can create,modify or cancel your Direct Debits and standing instructions on any of your Global bank accounts.
                </div>
                </div>
        </div>
        <div class="sidenav bg-light" id="sidenav">
           <a href="deposit.php">Deposit</a>
           <a href="withdraw.php">Withdraw</a>
           <a href="balance.php">Check Balance</a>
            <div class="dropdown"><a href="">Add Account</a>
               <div class="dropdown-content">
                 <a href="opencheck.php">Checking Acct</a>
                 <a href="opendomic.php">Domic Acct</a>
               </div>
           </div>
           <div class="dropdown"><a href="">Transfer Funds</a>
               <div class="dropdown-content">
                 <a href="mytransfer.php">My Account</a>
                 <a href="transfer.php">Other Account</a>
               </div>
           </div>
           <button id="log" onclick="location.href='logout.php'">Log Out</button>
        </div>
  		</div>
  	</div>
  </div>
</body>
</html>
<?php
}
else{
    $errmsg='Access denied you must log in here first';
    include 'index.php';
}
?>