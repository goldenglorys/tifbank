<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font/fontawesome/web-fonts-with-css/css/fontawesome-all.css">
	<title></title>
	<style type="text/css">
		img{
			 background-repeat: no-repeat;
			 background-size: cover;
			 opacity: 0.5;
			 width: 100%;
			 height: 694px;
		}
		#log{
			position: absolute;
			top: 30px;
			left: 388px;
			width: 40%;
            height: 100px;
            margin-top: 70px;
		}
		form{background: transparent !important;}
	</style>
</head>
<body>
<img src="login3.jpg">
<div class="container">
<div id="log">
	<form class="card" action="loginadminval.php" method="post">
		<div class="card-header text-center">
		 <i class="fa fa-lock fa-2x text-success"></i>
		 <h4 class="text-success">Admin Login Portal</h4>
		</div>
		<div class="card-body">
		<div class="text-center"><font color="red" size="5"> <?php if (isset($errmsg)) {
		echo $errmsg;
	} ?></font></div>
			<div class="form-group">
			 	<label>Email :</label>
			 	<span class="input-group">
			 	 	<span class="input-group-addon">
			 	 		<i class="fa fa-envelope text-success"></i>
			 	 	</span>
			  <input type="email" class="form-control" name="mail" required="true">
			</span>
			</div>
			<div class="form-group">
			 	<label>Password :</label>
			  <span class="input-group">
			 	 	<span class="input-group-addon">
			 	 		<i class="fa fa-key text-success"></i>
			 	 	</span>
			  <input type="password" class="form-control" name="password" required="true">
			</div>
			</div>
			<div class="text-center">
			  <input type="submit" value="Sign In" class="btn-sm btn-success mb-4">
			</div>
		</div>	
		<!-- <div class="card-footer">
			<a href="newadmin.php" class="text-success">Add new administrator here!</a>
		</div> -->
	</form>
	</div>
</div>
</body>
</html>