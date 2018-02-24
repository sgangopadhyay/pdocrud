<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP PDO Data PREPARED STATEMENT using POSITIONAL to enter Data into Database</title>
	</head>
	<body>
	<?php
	/* Description : PHP PDO Data PREPARED STATEMENT using POSITIONAL placeholder
				Created By : Suman Gangopadhyay
				Date of Creation : 24-Sept-2017
	*/
	try {
		$dbconnection =  new PDO('mysql:host=localhost;dbname=pdo_practice;port=3306','root','suman');
		$sql = "SELECT * FROM employee_details WHERE id = ? AND firstname = ?";
		$stmt = $dbconnection->prepare($sql);
		$id = 1;
		$firstname = 'suman';
		if($stmt->execute([$id, $firstname])){
			while($data = $stmt->fetch(PDO::FETCH_BOTH)){
				echo $data[0];
				echo $data['firstname'];
				echo $data['lastname'];
				echo $data['mobile'];
			}
			$dbconnection = null;
		}else{
			echo "Something went wrong !";
		}
	} catch (PDOException $e) {
		echo $e;
	}
	?>
	</body>
</html>
