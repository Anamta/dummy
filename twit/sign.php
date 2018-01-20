<html>
   <head>
    <title>Twitter</title>
	<link href="img/twitter.jpg" rel="icon" >
	<link href="css/animate.css" rel="stylesheet" >
	<link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/font-awesome.css" rel="stylesheet">

   </head>
   
     <body style="background:#007399">
       <center>
	   <div class="main"  class="animated wobble" style="height:500px;background:white;width:500px;">
	     <div class="header" style="height:50px;background:#0099ff;width:500px;">
		   <img src="img/twitter.jpg" alt="logo" style="width:30px;margin-right:500px;margin-top:10px;">
		   <h4 style="margin-right:400px;margin-top:-22px;color:white;">Twitter</h4>
		    <a href="index.php"><button type="submit" class="btn btn-default" style="width:100px;height:30px;color:white;font-size:12px;background:#007399;border:1px solid white;margin-top:-35px;margin-left:280px;"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</button></a>
		 </div>
		 <div class="jumbotron">
		 <section>
		  <div class="container">
		  <div class="row">
			    <div class="col-md-12 login-form">
				  <h2 style="font-size:30px;font-weight:20px;text-decoration:underline;font-family:Arial, Helvetica, sans-serif;">Sign up</h2><br>
				   <form method="post" action="sign.php">
					  <div class="form-group">
						<label for="fullname" style="margin-right:200px;font-size:20px;text-decoration:underline">Full Name</label>
						<input type="fullname" class="form-control" name="username" id="exampleInputEmail1" placeholder="Full Name" style="width:300px;height:40px;">
					  </div><br>
					  <div class="form-group">
						<label for="email" style="font-size:20px;text-decoration:underline;margin-top:-20px;margin-right:240px;">Email</label>
						<input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email" style="width:300px;height:40px;">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1" style="margin-right:200px;font-size:20px;text-decoration:underline">Password</label>
						<input type="Password" class="form-control" id="exampleInputEmail1" name="pass" placeholder="Password" style="width:300px;height:40px;">
					  </div><br>
					  <div class="form-group">
						<label for="phone" style="font-size:20px;text-decoration:underline;margin-top:-20px;margin-right:200px;">Phone No</label>
						<input type="phone" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Phone No" style="width:300px;height:40px;">
					  </div><br>
					 <button type="submit" class="btn btn-default" name="submit" style="width:250px;height:40px;font-size:20px;background:#0099ff;;border:1px solid #0099ff;;">Sign up</button>
					 <?php
				     if(isset($error_msg))
					 {
						 echo "<span  style='color:red;' class='pull-right'>$error_msg</span>";
					 }
					 else if(isset($msg))
					 {
						  echo "<span  style='color:green;' class='pull-right'>$msg</span>";
					 }
				   ?>
					 
					</form>
				  </div>
				</div>
			  </div>
		    
		  </section>
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
	   </div>
		</center>	   
	 </body>

</html>


<?php
include('include/conn.php');

if(isset($_POST['submit']))
		   {
			   $cs_name=$_POST['username'];
			   $cs_email=$_POST['email'];
			   $cs_pass=$_POST['pass'];
			   $cs_phone=$_POST['phone'];
			   
			   if(empty($cs_name) or empty($cs_email) or empty($cs_pass) or empty($cs_phone) )
			   {
				echo "ALL (*) feilds are Required";   
			   }
			   else
			   {
				   $cs_query="INSERT INTO `signup` (`Email_add`, `pass`, `username`, `phone`) VALUES ('$cs_email', '$cs_pass', '$cs_name', '$cs_phone')";
				   if(mysqli_query($conn,$cs_query))
				   {
					   header("location:index.php");
					   $msg="Inputs are submitted.";
				   }
				   else
				   {
					   $error_msg="Inputs has not been submitted";
				   }
			   }
		   }
?>