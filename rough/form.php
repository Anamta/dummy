<html>
  <head>
   <title>Form Submit</title>
  </head>
  <?php
   $name=$email=$web=$comment=$gender="";
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
	   
	   $name=input($_POST['name']);
	   $email=input($_POST['email']);
	   $web=input($_POST['web']);
	   $comment=input($_POST['comment']);
	   @$gender=input($_POST['gender']);
	   
   }
   function input($data)
   {
	   $data=trim($data);
	   $data=stripslashes($data);
	   $data=htmlspecialchars($data);
	   return $data;
   }
  
  ?>
		
		<body>
		<h2> PHP Form Validation </h2>
		  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		    <label>Name</label>
			<input type="text" name="name"><br><br>
			<label>Email Address</label>
			<input type="email" name="email"><br><br>
			<label>Website</label>
			<input type="website" name="web"><br><br>
			<label>Comment</label>
			<textarea name="comment" rows=5 cols=30 ></textarea><br><br>
			<label>Gender</label>
			<input type="checkbox" name="gender" value="male">Male
			<input type="checkbox" name="gender" value="female">female<br><br>
			<input type="submit" name="submit">
		  </form>
		  
		  <?php
			echo "<h2>Your Input:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $web;
			echo "<br>";
			echo $comment;
			echo "<br>";
			echo $gender;
			?>

		  
		</body>
</html>