
<?php

session_start();
if(!isset($_SESSION['id'])){
	header("location:index.php");
}
	else{
?>
<html>

<head>
  <title>WELLCOME</title>
  <link href="img/twitter.jpg" rel="icon" >
 <style>
	textarea::-webkit-input-placeholder{
		color:black!important;
		line-height:55px;
	}
 </style>
 
</head>
<body style="background-color:#007399">
 
 <div class="name">
<h1 style="color:#8533ff;background:linear-gradient(to top,#a3a3c2,#e6fff7,#a3a3c2);text-align:center;font-size:3em;text-decoration:underline;text-shadow:5px 5px #80d4ff;text-transform:uppercase;">WELLCOME <br><br>TO<br><br> TWITTER</h1>
</div>
 <?php
 include('include/conn.php');
if(isset($_POST['submit'])!="")
		   {
			   $tweet=$_POST['tweet'];
			    $id=$_SESSION['id'];

				   $cs_query="INSERT INTO `tweet` (`t_id`, `tweet`, `id`) VALUES ('', '$tweet','$id')";
				   $run=mysqli_query($conn,$cs_query);
				   if($row=mysqli_num_rows['$run'])
				   {
					   $tweet=$row['tweet'];
					   $id=$_SESSION['id'];
					   header("location:next.php");
				   }
				   else
				   {
						echo "not working";
				   }
		   }?>
<div class="" style="height:200px;width:600px;margin-left:200px;margin-top:20px;color:#003366; background:black;">	  
<form action="next.php" method="post">	
<img src="img/pic.png" class="img-circle" width="100" height="100" style="margin-left:30px;margin-top:40px;">				
 <textarea  class="text" placeholder="What's happining" name="tweet" style="height:60px;width:70%;margin-left:150px;margin-top:-80px;color:#003366;"></textarea>
 <input type="submit" value="Twitter" name="submit" style="margin-left:350px;">
 <a href="logout.php" style="display:block;height:18px;text-decoration:none;text-align:center;line-height:20px;width:50px;margin-left:70%;margin-top:-21px;background:#f2f2f2;border:2px solid gray;color:black;">Logout</a><br><br>
 <form>
 </div>
  <?php
 $id=$_SESSION['id'];
 echo "$id";
	$sql="Select signup.*,tweet.* from signup join tweet where signup.id=tweet.id and signup.id='$id'";
	$run=$conn->query($sql);
	while ($row=mysqli_fetch_array($run)) {
	$t_id=$row['t_id'];
 ?>
 <div class="portion" style="height:150px;width:600px;background:#e6ccff;margin-left:200px;">
 
 <form action="" method="post">
 	<h2 style="margin-left:20px;"><?php echo ucfirst($row['username']);?></h2><textarea style="height:60px;width:70%;margin-left:75px;margin-top:2px;"> <?php echo $row['tweet']?> </textarea><br><br>
	<a href="Delete.php?t_id=<?php echo $t_id; ?>" style="display:block;height:18px;text-decoration:none;text-align:center;line-height:20px;width:50px;background:#f2f2f2;border:1px solid gray;color:black;margin-left:250px;">Delete</a>
	</form>
	</div>
 
 <?php
	} 
 ?>
</body>
</html>
<?php }?>