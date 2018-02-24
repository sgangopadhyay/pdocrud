<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>PHP PDO Data PREPARED STATEMENT using INSERT to enter Data into Database</title>
	</head>
	<body>
	<?php
	/* Description : PHP PDO Data PREPARED STATEMENT using INSERT to enter Data into Database
				Created By : Suman Gangopadhyay
				Date of Creation : 24-Sept-2017
	*/
	try {
		$dbconnection =  new PDO('mysql:host=localhost;dbname=pdo_practice;port=3306','root','suman');
		$sql = "INSERT INTO employee_details (id, firstname, lastname, mobile) VALUES(:id, :firstname, :lastname, :mobile)";
		$stmt = $dbconnection->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':lastname', $lastname);
		$stmt->bindParam(':mobile', $mobile);
		$id=3212;
		$firstname='Antony';
		$lastname='Gunzalvas';
	 $mobile=9934223094;
		if(!$stmt->execute()){
			echo "Something went wrong : ";
		}else{
			echo "Data inserted successfully";
			$dbconnection = null;
		}
	} catch (PDOException $e) {
		echo $e;
	}

	?>
	</body>
</html>
