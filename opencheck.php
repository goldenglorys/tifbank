<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<title></title>
	<style type="text/css">
	#all{background: #85BEED;opacity: 0.5;width: 100%;height: 790px;}
		.card{background: transparent;}
		.container-fluid{
			position: absolute;
			top: 10px;
			width: 100%;
            height: 100px;
		}
	</style>
</head>
<body>
 <nav class="fixed-top navbar" style="height:75px;background-color:#85BEED;"> 
 <a class="navbar-link" href="home.php" style="font-size:25px;margin-bottom:-30px;color: #0066cc;"><img src="s.png" style="height:90px;width:100px;margin-top:-33px;"></a>
  </nav>
  <div id="all"></div>
	<div class="container-fluid">
	    <div class="row">
	               <div class="col-md-6 offset-3">
					    <form class="form card" action="procheck.php" method="post" enctype="multipart/form-data" style="margin-top:70px">
						 	 <div class="card-header text-center">
						 	 	<h3 class="text-dark">Open Your Checking Account here</h3>
						 	 </div>
						 	 <div class="card-body">
						 	    <div class="form-group">
						 	 	    <label>Firstname :</label>
						 	 	  <input type="text" class="form-control" name="firstname" required="true" placeholder="Enter details for verification">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Lastname :</label>
						 	 	  <input type="text" class="form-control" name="lastname" required="true" placeholder="Enter details for verification">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Email :</label>
						 	 	  <input type="text" class="form-control" name="email" required="true" placeholder="Enter details for verification">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Phone Number:</label>
						 	 	  <input type="text" class="form-control" name="phone" required="true" placeholder="Enter details for verification">
						 	 	</div>							    <div class="form-group">
						 	 		<label>Opening Amount:</label>
						 	 	  <input type="text" class="form-control" name="amount" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Password :</label>
						 	 	  <input type="password" class="form-control" name="password" required="true" placeholder="Enter details for verification">
						 	 	</div>
						 	 	<div class="text-center">
						 	 	  <input type="submit" id="register" value="Submit" class="btn btn-info btn-sm">
						 	 	</div>
						 	 	<div class="card-footer bg-info mt-2 text-center">
						 	 		
						 	 	</div>
						 	 </div>
					    </form>
		            </div>
	    </div>
    </div>
</body>
</html>
