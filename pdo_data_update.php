<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP PDO Data UPDATE into Database</title>	
	</head>
	<body>
	<?php
	/* Description : PDO Program to UPDATE data into Database
				Created By : Suman Gangopadhyay
				Date of Creation : 23-Sept-2017
	*/	
	try{
		$conn = new PDO('mysql:host=localhost;dbname=pdo_practice;port=3306', 'root','suman');
		$sql = "UPDATE employee_details SET mobile=9472837973 WHERE firstname='Suman'";
		if(!$conn->exec($sql)){
			echo "Update failed!";			
		}else{
			echo "Successfully updated the record";
		}		
	}catch(PDOException $e){
		echo $e;
	}		
	?> 
	</body>
</html>