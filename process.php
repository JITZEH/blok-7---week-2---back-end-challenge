<?php include 'db_connection.php';?>

<?php
 $conn = connect();
 var_dump($conn);
 $name=$_POST['name'];
 $description=$_POST['description'];



try {
	$sql = "INSERT INTO lists (name, description)
	VALUES ('$name','$description')";
	// use exec() because no results are returned
	$conn->exec($sql);
  } catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
  }