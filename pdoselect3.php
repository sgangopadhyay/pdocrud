<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PDO Connection</title>
</head>
<body>
  <?php
  try {
    // PHP program for simple Database Select statement using PDO
    $dsn = 'mysql:host=localhost;dbname=pdo_practice;charset=utf8;port=3306';
    $username = 'root';
    $password = 'suman';
    $firstname = 'Suman';
    $mobile = 9934223094;
    $error = [PDO::ERRMODE_EXCEPTION];
    $conn = new PDO($dsn, $username, $password, $error);
    $sqlquery = 'SELECT id,firtname FROM employee_details WHERE mobile=$mobile';
    $result = $conn->query($sqlquery);
    while ($data = $result->fetch(PDO::FETCH_ASSOC)){
      echo "ID : ". $data['id']."<br/>";
      echo "FIRST NAME : ". $data['firstname']."<br/>";
      echo "<p></p>";
    }  
  }
  catch (PDOException $e) {
    echo "Error in Datbase connection : ".$e->getMessage();
  }
  ?>
</body>
</html>
