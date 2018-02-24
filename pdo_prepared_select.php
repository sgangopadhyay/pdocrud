<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP PDO Data PREPARED STATEMENT SELECT into Database</title>	
	</head>
	<body>
	<?php
	/* Description : PDO Program to create a PREPARED STATEMENT using SELECT
				Created By : Suman Gangopadhyay
				Date of Creation : 23-Sept-2017
	*/	
	try{
		$dbconnection = new PDO('mysql:host=localhost;dbname=pdo_practice;port=3306','root','suman');
		$sql = "SELECT * FROM employee_details WHERE id=:id";
		$stmt = $dbconnection->prepare($sql);
		$stmt->bindParam(':id', $id);
		$id=1;
		$stmt->execute();
		print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
		$stmt->bindParam(':id', $id);
		$id=2;
		$stmt->execute();
		
		print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
		
	}catch(PDOException $e){
		echo $e;
	}
	?> 
	</body>
</html>