<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP PDO Data INSERT into Database</title>	
	</head>
	<body>
	<?php
	/* Description : PDO Program to INSERT data into Database
				Created By : Suman Gangopadhyay
				Date of Creation : 23-Sept-2017
	*/	
	try{
		$conn=new PDO('mysql:host=localhost;dbname=pdo_practice;port=3306', 'root', 'suman');
		$sql = "INSERT INTO employee_details (id, firstname, lastname, mobile) VALUES(567, 'Afroz','Azad', 1632037794)";
		if(!$conn->exec($sql)){
			echo "Terrible happened !";
		}else{
			echo "Done";
		}
	}catch(PDOException $e){
		echo $e;
	}
		
	?> 
	</body>
</html>