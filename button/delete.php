
<?php include 'db_config.php';?>

<?php

$id=$_GET['id'];

 $sql="DELETE FROM button_table WHERE buttonid=$id";
 
 if($conn->query($sql)===TRUE){
		echo"record deleted success";
	}
	$conn->close();
	
?>