<?php session_start();
if ($_SESSION['user']) {
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
        body{
            background-color: #E8EAED;
        }
        a{
        	color: #009470;
        }
       li a:hover{
            background-color: #009470;
            color: white;
            border-radius: 5px;
            transition: 1s;
        }
        #mes li{
            font-size: 20px;
            font-family:sans-serif;
        }
        .footer {
                color:white;
                padding:10px;
                background-color:#009470; 
                position: fixed;
                bottom: 0px;
                width: 100%;
            }
        .card{
                margin-top: 70px;
                background: transparent;    
            }
        .card input{background: transparent;}
	</style>

</head>
<body ng-app="thestaffs">
<header>
   <div class="header text-center fixed-top" style="background-color:#009470;color:white;"><?php echo"Welcome"." ". $_SESSION['user'];?> <div>
	<nav class="navbar navbar fixed-top navbar" style="height:70px;background-color:#E8EAED;margin-top:23px;box-shadow: 5px 5px 10px rgba(25, 10,10, .2);"> 
        <a class="navbar-link" href="#!" style="font-size:25px;margin-bottom:-30px;"><img src="s.png" style="height:70px;width:80px;margin-top:-35px;"></a>
            <ul class="nav navbar-top-links" id="mes">
                    <li class="nav-item"><a href="#!depo" class="nav-link">Deposit</a></li>
                    <li class="nav-item"><a href="#!withd" class="nav-link">Withdrawl</a></li>
                    <li class="nav-item"><a href="#!about" class="nav-link">Balance</a></li>
                    <li class="nav-item dropdown"><a href="#!gallary" class="nav-link dropdown-toggle" data-toggle="dropdown">Add Account<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </li>

                </ul>
           <div>
	           	 <ul class="nav navbar-top-links navbar-right pull-right">
                	<li class="nav-item" title="Messenger"><a href="#!mails" class="nav-link"><span class="fa fa-envelope" id="me"></span></a></li>
                	<li class="nav-item" title="Notifications"><a href="#!notification" class="nav-link nav-brand"><span class="fa fa-bell" id="me"></span></a></li>
                    <li class="nav-item" title="Logout here"><a href="http://localhost/adeleke/Adminlogin/index.php" class="nav-link"><span class="fa fa-sign-out-alt" id="me">Logout</span></a></li>  
                 </ul>
           </div>
	</nav>
</header><hr>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
               <div ng-view></div>
            </div>
	    </div>
    </div>
</main>
    <footer class="footer text-center"> 2018 &copy;  </footer>
</body>
<script type="text/javascript" src="AngularJS/angular.js"></script>
<script type="text/javascript" src="AngularJS/bower-angular-route-master/angular-route.js"></script>
<script>
    
 var myApp=angular.module('thestaffs',['ngRoute']);
  myApp.config(function($routeProvider){
        $routeProvider
        // .when("/",{templateUrl:"customerhome.php"})
        .when("/depo",{templateUrl:"depo.php",controller:"depositController"})
        .when("/withd",{templateUrl:"withd.php",controller:"withdrawalController"})
        .when("/bal",{templateUrl:"bal.php",controller:"balanceController"})
        .when("/addacct",{templateUrl:"newadmin.php",controller:"newadminController"})
  });

</script>
</html>
<?php
}
else{
    $errmsg='Log in here first';
    include 'index.php';
}
?>	