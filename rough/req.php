<html>
  <head>
  </head>
  
    <body>
	  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	     Name:<input type="text" name="fname">
		 <input type="submit" name="submit">
	  </form>
	  
	  <?php
	    if($_SERVER["REQUEST_METHOD"]=="POST")
		{
		  $nam=$_REQUEST['fname'];
			if(empty($nam))
			{
			  echo "Enter the name";	
			}
			else
			{
				echo "$nam";
			}
		}
	  
	  ?>
	</body>

</html>