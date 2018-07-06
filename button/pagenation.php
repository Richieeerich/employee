<!DOCTYPE html>
<html>
<head>
	<title>pagenation</title>
</head>
<body>
	<?php include'db_config.php';?>
	<?php	
		
			echo 'hi';
		$realsql="select * from button_table limit 0,2";
		$start=($curpage*$perpage)-$perpage;
		$pageSql = "SELECT * FROM `button_table`";
		$pageres = mysqli_query($connection, $Page
		

	?>
</body>
</html>