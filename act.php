<?php  

for ($i=0; ; $i++) { 
	$acct = mt_rand(1,10000000000);
	if(strlen($acct)==10){
		break;
	}
}
date_default_timezone_set("Africa/Lagos");
$opendate = date("Y-m-d");
$opentime = date("h:i:sA");
echo '<script>alert("Your registration is successful".)</script>';
echo $acct;
echo $opentime;
echo $opendate;
<h3 class="text-success" style="margin-left:10px"><marquee><?php echo "Welcome". " " .$_SESSION['name']." "."your account number is". " " .$_SESSION['number'] ;?></marquee></h3>
?>
<!-- <script type="text/javascript" src="AngularJS/angular.js"></script>
<script type="text/javascript" src="AngularJS/bower-angular-route-master/angular-route.js"></script>
<script>
  var bank=angular.module('home',['ngRoute']);
  bank.config(function($routeProvider){
        $routeProvider
        // .when("/",{templateUrl:"index.php.php"})
        .when("/deposit",{templateUrl:"deposit.php",controller:"depositController"})
        .when("/withdraw",{templateUrl:"withdraw.php",controller:"withdrawController"})
        .when("/balance",{templateUrl:"balance.php",controller:"balanceController"})
  });
</script>
<div class="sidenav bg-light" id="sidenav">
           <a href="#!deposit">Deposit</a>
           <a href="#!withdraw">Withdraw</a>
           <a href="#!balance">Check Balance</a>
        </div> -->