<!DOCTYPE html>

<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- <input type="button" value="download"> -->
	<a href="pdfpage.php">Download</a>
	<?php include'db_config.php';?>
	
<?php
	if(!isset($_GET['page'])){
	  $page=1;
	}else{
		$page=$_GET['page'];
	}

	$limit=5;
	$tartpae=($page*$limit)-$limit;

?>

<?php include'db_config.php';
		?>
			<?php
				$query = "select * from button_table limit $tartpae,$limit";	
				$result = $conn->query($query);
			?>
		
		<div class="table-responsive">          
 		 <table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>Name</th>
	        <th>gender</th>
	        <th>language</th>
	        <th>designation</th>
	        <th>action</th>
	  	</tr>
	    </thead>
		    <tbody>
	<?php
	if ($result->num_rows > 0) { 
 		while($row = $result->fetch_assoc()) {	
 		?> 
	      <tr>
	        <td><?php echo $row['name']?></td>
	        <td><?php echo $row['gender']?></td>
         	<td><?php echo $row['language']?></td>
          	<td><?php echo $row['designation']?></td>
          	<td><a href="edit.php?id=<?php echo $row["buttonid"]; ?>">Edit</a>
          	| <a href="delete.php?id=<?php echo $row["buttonid"]; ?>">Delete</a></td>
          	
 	      </tr>
          	</tr>

 	     <?php
 	      	}
 	      
 	    }
 	    ?>
 	     </tbody>
	  </table>

 
	<?php
	$conn=mysqli_connect('localhost','root','root');
mysqli_select_db($conn,'button');
$results_per_page=5;
$sql="SELECT * FROM button_table";
$result=mysqli_query($conn,$sql);
 $number_of_results = mysqli_num_rows($result);
$number_of_pages=ceil($number_of_results/$results_per_page);

  for ($page=1;$page<=$number_of_pages;$page++) {
  	echo '<a href="tableshow.php?page=' . $page . '">' . $page . '</a> ';
  }

  ?> 

		 	   
 </body>
 </html>
	 	
	 