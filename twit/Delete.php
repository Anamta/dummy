<?php
include('include/conn.php');
$t_id=$_REQUEST['t_id'];
   $sql="DELETE FROM tweet WHERE t_id='$t_id'";
   if($conn->query($sql))
    header("Location:next.php");
	
?>