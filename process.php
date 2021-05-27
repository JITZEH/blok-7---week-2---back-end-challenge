<?php include 'db_connection.php';?>

<?php
 $conn = connect();
 var_dump($conn);
// create a variable
// $name=$_POST['title'];
// $description=$_POST['description'];



try {
	$sql = "INSERT INTO lists (title, description)
	VALUES ('test','ffffs')";
	// use exec() because no results are returned
	$conn->exec($sql);
  } catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
  }