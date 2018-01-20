<html>
   <head>
    <title>Twitter</title>
	<link href="img/twitter.jpg" rel="icon" >
	<link href="css/animate.css" rel="stylesheet" >
	<link href="css/bootstrap.min.css" rel="stylesheet">

   </head>
   
     <body style="background:#007399">
       <center>
	   <div class="main"  class="animated fadeInLeft" style="height:500px;background:white;width:500px;">
	     <div class="header" style="height:50px;background:#0099ff;width:500px;">
		   <img src="img/twitter.jpg" alt="logo" style="width:30px;margin-right:500px;margin-top:10px;">
		   <h4 style="margin-right:400px;margin-top:-22px;color:white;">Twitter</h4>
		   <a href="index.php"><button type="submit" class="btn btn-default" style="width:80px;height:30px;color:white;font-size:12px;background:#007399;border:1px solid white;margin-top:-35px;margin-left:250px;"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</button></a>
		   <a href="sign.php"><button type="submit" class="btn btn-default" style="width:80px;height:30px;color:white;font-size:12px;background:#007399;border:1px solid white;margin-top:-35px;margin-left:415px;"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign up</button></a>
		 </div>
		 <div class="jumbotron">
		 <section>
		  <div class="container">
		  <div class="row">
			    <div class="col-md-12 login-form">
				  <h2 style="font-size:30px;font-weight:20px;text-decoration:underline;font-family:Arial, Helvetica, sans-serif;">Log in</h2><br>
				   <form method="post" action="index.php">
					  <div class="form-group">
						<label for="Phone,email or username" style="margin-right:60px;font-size:20px;text-decoration:underline">Phone,email or username</label>
						<input type="Phone,email or username" name="username" class="form-control" id="exampleInputEmail1" placeholder="Phone,email or username" style="width:300px;height:40px;">
					  </div><br><br>
					  <div class="form-group">
						<label for="exampleInputPassword1" style="font-size:20px;text-decoration:underline;margin-top:-20px;margin-right:190px;">Password</label>
						<input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password" style="width:300px;height:40px;">
					  </div><br><br>
					 <button type="submit"  name ="submit" class="btn btn-default" style="width:250px;height:40px;font-size:20px;background:#1a53ff;border:1px solid #1a53ff;">Log in</button><br><br><br>
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
	$name=$_POST['username'];
	$pass=$_POST['pass'];
	
$query="SELECT * FROM signup WHERE username='$name' AND pass='$pass'";
$run=mysqli_query($conn,$query);

	if($row=mysqli_fetch_array($run))
	{
	$id=$row['id'];
	session_start();
	$_SESSION['id']=$id;
	header('location:next.php'); 
	
   }

         else
			{
				echo " no run";
			}	
} 
 ?>
	  