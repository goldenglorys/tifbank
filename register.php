<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta class="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
	<title></title>
	<style type="text/css">
	#all{background: #85BEED;opacity: 0.5;width: 100%;height: 1505px;}
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
				 <a class="navbar-link" href="#" style="font-size:25px;margin-bottom:-30px;color: #0066cc;"><img src="s.png" style="height:90px;width:100px;margin-top:-33px;"></a>
  </nav>
  <div id="all"></div>
	<div class="container-fluid">
	    <div class="row">
	               <div class="col-md-6 offset-3">
					    <form class="form card" action="processreg.php" method="post" enctype="multipart/form-data" style="margin-top:70px">
						 	 <div class="card-header text-center">
						 	 	<h3 class="text-dark">Register now!</h3>
						 	 </div>
						 	 <div class="card-body">
						 	    <div class="form-group">
						 	 	    <label>Firstname :</label>
						 	 	  <input type="text" class="form-control" name="firstname" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Lastname :</label>
						 	 	  <input type="text" class="form-control" name="lastname" required="true">
						 	 	</div>
						 	 	<div class="form-group">
			                       <label>Gender :</label>
						 	 	<input type="radio" name="radio" value="Female" style="margin:10px">Female<input type="radio" name="radio" value="Male" style="margin:10px">Male</div>
						 	 	<div class="form-group">
						 	 		<label>Date of  Birth :</label>
						 	 	  <input type="date" class="form-control" name="bday" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Nationality :</label>
						 	 		<select name="nationality" class="form-control">
									  <option selected="select">Select your country</option>
									  <option value="Nigeria">Nigeria</option>
									</select>  
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>State of Birth:</label>
						 	 	  <input type="text" class="form-control" name="state" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Home Address :</label>
						 	 	  <input type="text" class="form-control" name="home" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Email :</label>
						 	 	  <input type="text" class="form-control" name="email" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Phone Number:</label>
						 	 	  <input type="text" class="form-control" name="phone" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Bank Branch :</label>
						 	 		<select name="branch" class="form-control" id="branch" onchange="units()">
									  <option selected="select">Select your registration branch</option>
									  <option value="Ibadan Branch">Ibadan Branch</option>
									  <option value="Ikeja Branch">Ikeja Branch</option>
									  <option value="Ikotun Branch">Ikotun Branch</option>
								      <option value="Ogbomosho Branch">Ogbomosho Branch</option>
									</select>  
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Bank Unit :</label>
						 	 		<select name="unit" class="form-control" id="unit">
									</select>  
						 	 	</div>
						 	 	<script>
						 	 		function units(){
						 	 			if (branch.value) {document.getElementById('unit').innerHTML='';}
						 	 			 if (branch.value=='Ibadan Branch') {document.getElementById('unit').innerHTML=" <option>Select your registration unit</option><option value='OjaOba Unit'>OjaOba Unit</option><option value='Oluyole Unit'>Oluyole Unit</option>";}
						 	 			 if (branch.value=='Ikeja Branch') {document.getElementById('unit').innerHTML=" <option>Select your registration unit</option><option value='MM Way Unit'>MM Way Unit</option>";}
						 	 			 if (branch.value=='Ikotun Branch') {document.getElementById('unit').innerHTML=" <option>Select your registration unit</option><option value='Idimu Unit'>Idimu Unit</option><option value='Pipeline Unit'>Pipeline Unit</option>";}
						 	 			 if (branch.value=='Ogbomosho Branch') {document.getElementById('unit').innerHTML=" <option>Select your registration unit</option><option value='Seminary Unit'>Seminary Unit</option><option value='Takie Unit'>Takie Unit</option>";}
						 	 		}
						 	 	</script>
						 	 	<!-- <div class="form-group">
						 	 	    <label>Account Type</label>
								      <select name="accttype" class="form-control">
									  <option selected="select">Select your choice</option>
								      <option value="Savings Acct">Savings Acct</option>
								      <option value="Current Acct">Checking Acct</option>
								      </select>
							    </div> -->
							   <!--  <div class="form-group">
						 	 		<label>Account Name :</label>
						 	 	  <input type="text" class="form-control" name="acctname" required="true">
						 	 	</div> -->
							    <div class="form-group">
						 	 		<label>Opening Amount:</label>
						 	 	  <input type="text" class="form-control" name="amount" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Password :</label>
						 	 	  <input type="password" class="form-control" name="password" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Confirm Password :</label>
						 	 	  <input type="password" class="form-control" name="confirm_password" required="true">
						 	 	</div>
						 	 	<div class="form-group">
						 	 		<label>Picture :</label>
						 	 	  <input type="file" name="passport">
						 	 	</div>
						 	 	<div class="text-center">
						 	 	  <input type="submit" id="register" value="Submit" class="btn btn-info btn-sm">
						 	 	</div>
						 	 	<div class="card-footer bg-info mt-2 text-center">
						 	 		Already have an account <a href="index.php" class="text-light" >Sign In here</a>
						 	 	</div>
						 	 </div>
					    </form>
		            </div>
	    </div>
    </div>
    <!-- <script>
    	$(document).ready(function(){
          $('#register').click(function(){
          	var take=$('form').serializeArray();
          	$.post("processreg.php",take,function(response){alert(response);
            location.href='index.php';
          	});
          	// $.post("processreg.php",{ 
          	// firstname:fname, lastname:lname, username:uname, gender:gen, date_of_birth:birthday, country:country, state:state, l_g_a:lga, home:homes, email:mail, phone_number:number, acct_type:accttype, kin:nxtkin, kin_number:nxtkinnum, password:pword, confirm_password:cpword, picture:pic
          	// },
          		
          });
    	});
    </script> -->
</body>
</html>
