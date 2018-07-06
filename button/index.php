<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
div {
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 20px;
}


	</style>
</head>
<body>
	<h2> EMLPOYEE DETAILS</h2>
	<form action="insert.php" method="POST">
		<div>
		Name:<br>
		 	<input type ="text" name="name"><br>
		<div>
		Gender:
			<input type="radio" name="gender" value="male">
			<label class="gender">male
		  	
		  	<input type="radio" name="gender" value="female" >
			<label class="gender">female<br>
		</div>
		<div>
  		language:
		   <label><input type="checkbox" name="subcat[]"  id="english" value="english">english</input></label>
	       <label><input type="checkbox" name="subcat[]" id="tamil" value="tamil">tamil</input><br></label>
	    </div>
	    designation:<br>
		<select name="designation">

		    <option value="php developer" name="php developer">php developer</option>
		    <option value="java developer" name="java developer">java developer</option>
		    </select>
		  <br>
	

	  <input type='submit' value='create'>

</form>
		
</body>
</html>