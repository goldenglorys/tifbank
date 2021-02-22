<?php session_start();
if ($_SESSION['admin']) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">  
	<title></title>
	<style type="text/css">
            .sidenav {
                height: 100%; 
                width: 15%;
                position: fixed; 
                top: 0;
                left: 0;
                padding-top: 100px; 
                background: #fff;
                box-shadow: 5px 5px 10px rgba(25, 10,10, .5);
            }
            #a {
                margin-top: -20px
            }
            #side-menu li {
                padding: 5px;
                margin-left: 25px;
                font-size: 15px;
            }
            #side-menu i {
                margin-right: 10px
            }
            a {
            	color: #009470;
            }
            a:hover {
                color: #343A40;
                text-decoration:none;
            }
            hr {
                margin-left: 10px;
            }
            #main {
                transition: margin-left .5s;margin-left: 195px;
                padding-top: 20px;
            }
            .footer {
               
                margin-left: 192px;
                color:white;
                padding:5px;
                background-color:#009470;
                position: fixed; 
                bottom: 0px ;  
                width: 85%
            }
	</style>
</head>
<body ng-app="controlPanel">
    <header class="header text-center fixed-top" style="background-color:#009470;color:white;"><?php echo"Welcome"." ". $_SESSION['admin'];?> </header>
       <nav class="navbar navbar fixed-top navbar mt-4" style="height:70px;width:85%;margin-left:192px;background-color: #fff;box-shadow: 5px 5px 10px rgba(25, 10,10, .5);"> 
               <div style="margin-left:852px">
    	           	<ul class="nav navbar-top-links navbar-right pull-right">
                    	<li class="nav-item"><a href="#!mails" class="nav-link"><span class="fa fa-envelope" id="me"></span></a></li>
                    	<li class="nav-item"><a href="#!notification" class="nav-link nav-brand"><span class="fa fa-bell" id="me"></span></a></li>
                        <li class="nav-item"><a href="http://localhost/adeleke/Adminlogin/index.php" class="nav-link"><span class="fa fa-sign-out-alt" id="me"> Logout</span></a></li>    
                    </ul>
               </div>
    	</nav>
    </header>
<hr><div class="sidenav mt-4">
	    <ul class="nav" id="side-menu">
            <div id="a">
                <li class="nav-item">
                    <a href="#!" class="navbar-link" style="margin-bottom:-30px;color:#0066cc;"><img src="s.png" style="height:70px;width:80px;margin-top:-110px;margin-left:10px"></a>
                </li>
                <li class="nav-item">
                    <a href="#!"><i class="fa fa-home"></i>Home</a>
                </li>
        <hr>
                <li class="nav-item">
                    <a href="#!"><i class="fa fa-user"></i>My Profile</a>
                </li>
        <hr>
                 <li class="nav-item">
                    <a href="#!viewcust"><i class="fa fa-users"></i>Customers</a>
                </li>
                
        <hr> 
                <li class="nav-item">
                    <a href="#!viewstaff"><i class="fa fa-users"></i>Staffs</a>
                </li>
        <hr>
                 <li class="nav-item">
                    <a href="#!transact"><i class="fa fa-location-arrow"></i>Transcts. History</a>
                </li>
        <hr>
                <li class="nav-item">
                    <a href="http://localhost/adeleke/Adminlogin/404.php"><i class="fa fa-info-circle "></i> Error 404</a>
                </li>
            </div>
        </ul>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3">
           <div id="main" class="text-center">
                <table class='table table-bordered table-striped mt-5 text-center'>
                
                    <tbody ng-view></tbody>
                </table> 
            </div>
        </div>
	</div>
</div>
 <div class="text-center">
    <footer class="footer" style="background-color:#009470;color:white"> 2018 &copy;  </footer>
 </div>
</body>
<script type="text/javascript" src="AngularJS/angular.js"></script>
<script type="text/javascript" src="AngularJS/bower-angular-route-master/angular-route.js"></script>
<script>
    
 var myApp=angular.module('controlPanel',['ngRoute']);
  myApp.config(function($routeProvider){
        $routeProvider
        // .when("/",{templateUrl:"index.php.php"})
        .when("/viewcust",{templateUrl:"viewcust.php",controller:"viewcustomersController"})
        .when("/viewstaff",{templateUrl:"viewstaff.php",controller:"viewstaffsController"})
        .when("/viewadmin",{templateUrl:"viewadmin.php",controller:"viewadminController"})
        .when("/newadmin",{templateUrl:"newadmin.php",controller:"newadminController"})
        .when("/transact",{templateUrl:"transact.php",controller:"transactionsController"})
  });

</script>
</html>
<?php
}
else{
    $errmsg='Access denied you must log in here first';
    include 'index.php';
}
?>	