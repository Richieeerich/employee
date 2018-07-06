<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

	
</head>
<body>

	<?php include 'db_config.php';
		$id = $_GET['id'];
		$query = "select * from button_table where buttonid = $id";	
		$result = $conn->query($query);
		if ($result->num_rows > 0) { 
 			while($row = $result->fetch_assoc()) {	   
 				?>

 		<form action="update.php" method="POST">
 		    <input type="hidden" name="id" value=<?php echo $row["buttonid"]; ?> >
		<div class="form-group">
			 <label for="name">name:</label>
			  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value=<?php echo $row["name"]; ?>>
		</div>
			
			<div>
				<label>gender: <?=$row['gender']?></label></br>
				<input type="radio" name="gender" <?=$row['gender']=="male" ? "checked" : ""?> value="male">male
				<input type="radio" name="gender" <?=$row['gender']=="female" ? "checked" : ""?> value="female">female
			</div>

				<div>
					<label for="language">language:</label>
					
					<input type="checkbox" name="language" <?= strpos($row['language'] , 'english') !== false ? "checked" : ""?> value="english">english
					<input type="checkbox" name="language" <?= strpos($row['language'] , 'tamil') !== false ? "checked" : ""?> value="tamil">tamil
					
				</div>
				<label for="designation">designation:</label>
						<input type="option" class="form-control" id="designation"  name="designation" value=<?php echo $row["designation"];?> >
		<br>	
			<button type="submit" value="update">Update</button>
	</form>
<?php
 		}
 	}
 		$conn->close();
	?>
</body>
</html>