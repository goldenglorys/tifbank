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
			top: 10px;
			left: 388px;
			width: 40%;
            height: 100px;
            margin-top: 70px;
		}
		.container{width: 40%;}
		a{margin-left:150px;}
		.card{background: transparent;}
	</style>
</head>
<body>
<img src="lin.jpg">
<div class="container">
<div id="log">
	<form class="card mt-4" action="processlogin.php" method="post">
		<div class="card-header text-center">
		 <i class="fa fa-key fa-2x text-dark"></i>
		 <h4 class="text-dark">Customers Login Page</h4>
		</div>
		<div class="card-body">
		<div class="text-center"><font color="red" size="5"> <?php if (isset($errmsg)) {
		echo $errmsg;
	} ?></font></div>
			<div class="form-group">
			 	<label>Email:</label>
			 	<span class="input-group">
			 	 	<span class="input-group-addon">
			 	 		<i class="fa fa-envelope"></i>
			 	 	</span>
			  <input type="text" class="form-control" name="mail" 
			</span>
			</div>
			<div class="form-group">
			 	<label>Password :</label>
			 	<span class="input-group">
			 	 	<span class="input-group-addon">
			 	 		<i class="fa fa-lock"></i>
			 	 	</span>
			  <input type="password" class="form-control" name="password" 
			  </span>
			</div>
			<div class="text-center">
			  <input type="submit" class="btn-sm btn-dark" value="Log In">
			</div>
		</div>	
		<div class="card-footer">
			<a href="register.php" class="text-dark">Create new account</a>
		</div>
	</form>
</div>
</div>
</body>
</html>
