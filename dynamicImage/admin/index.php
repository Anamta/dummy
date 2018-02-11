<?php
$conn=mysqli_connect('localhost','root','','dynamic');

if(isset($_POST['submit']))
{
$file_name=$_FILES['file']['name'];	
$file_tmp_name=$_FILES['file']['tmp_name'];	
$file_size=$_FILES['file']['size'];	
$file_type=$_FILES['file']['type'];	
$download_path="downloads/".$file_name;
$new="downloads/".$file_tmp_name;
	move_uploaded_file($file_tmp_name, $download_path);
$que="INSERT INTO sub_dynamic(image) VALUES ('$new')";
$run=mysqli_query($conn,$que);
if($run)
{
	echo "run";
}
else
{
	echo "no";
}
}
?>
	<html>
		<head>
		</head>
			<body>
				<form method="post" action="index.php"enctype="multipart/form-data">
				<input type="file" name="file"/>
				<input type="submit" name="submit"/>
					<img src="<?PHP echo "downloads/".$file_name;?>"/>
				</form>
			</body>
	</html>