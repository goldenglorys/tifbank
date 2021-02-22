<?php session_start();
require 'dbcon.php';
if (isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
<style type="text/css">
.sidenav {
    height: 100%; 
    width: 15%;
    position: fixed; 
    top: 0;
    left: 0;
    padding-top: 100px; 
}
.sidenav a {
    padding: 15px 30px 8px 8px;
    text-decoration: none;
    font-size: 20px;
    color: #fff;
    display: block;
}
 .sidenav a:hover{color: #fff;}
 #log{
  background: #343A40;
  color: #fff;
  border: 2px solid #17A2B8;
  margin-left: 1170px;
  position: relative;
  top: -70px;
  height:45px;
  padding:2px;
  border-radius:5px;
  transition-duration: 0.5s;
}
#log:hover{
   background: #17A2B8;
}
.row{margin-left: 165px;margin-top: 75px}
a:hover{text-decoration: none;}
</style>
</head>
<body ng-app="admin">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav class="fixed-top bg-dark" style="height:90px">
<div style=";padding:30px;height:90px;border-radius:2px;background-color:#80B8CC;width:15%"><a href=""><img src="s.png" style="height:85px;width:100px;margin-top:-33px;"></a></div> 
<button id="log">Log Out</button>
</nav>
<div id="mySidenav" class="sidenav bg-dark">
  <a href="#!viewadmin">Staffs</a>
  <a href="#!viewcust">Customers</a>
  <a href="#!transact">Transactions</a>
</div>
<div ng-view></div>
</div>
</div>
</div>
</body>
<script type="text/javascript" src="AngularJS/angular.js"></script>
<script type="text/javascript" src="AngularJS/bower-angular-route-master/angular-route.js"></script>
<script>
  var app=angular.module('admin',['ngRoute']);
  app.config(function($routeProvider){
        $routeProvider
        // .when("/",{templateUrl:"index.php.php"})
        .when("/viewcust",{templateUrl:"viewcust.php",controller:"viewcustController"})
        .when("/viewadmin",{templateUrl:"viewadmin.php",controller:"viewadminController"})
        .when("/newadmin",{templateUrl:"newadmin.php",controller:"newadminController"})
        .when("/transact",{templateUrl:"transact.php",controller:"transactController"})
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