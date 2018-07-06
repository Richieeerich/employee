<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include'db_config.php';

	$id = $_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$checkbox=$_POST['language'];
	$designation=$_POST['designation'];


	$sql="update button_table set name='$name',gender ='$gender',language = '$checkbox',
				 designation='$designation' where buttonid=$id";

	if($conn->query($sql)===TRUE){
		include'home.php';
	}
	$conn->close();
	
	?>
</body>
</html>