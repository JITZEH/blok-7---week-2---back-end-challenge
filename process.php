<?php include 'db_connection.php';?>

<?php
 $conn = connect();
 var_dump($conn);
 $name=$_POST['name'];
 $description=$_POST['description'];
 $duration=$_POST['duration'];
 $status=$_POST['status'];
 $list_id=$_POST['list_id'];



 function insertList($name, $description, $conn) {
	try {
		$sql =  "INSERT INTO lists (name, description)
		VALUES (:name,:description)" ;
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':description', $description);
	// use exec() because no results are returned
	
	$stmt->execute();
  } catch(PDOException $e) {
	return $sql . "<br>" . $e->getMessage();
  }
}

function insertTask($name, $duration, $status, $list_id, $conn) {
	try {
		$sql = "INSERT INTO tasks (name, duration, status, list_id)
		VALUES (:name, :duration, :status, :list_id)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':duration', $duration);
	$stmt->bindParam(':status', $status);
	$stmt->bindParam(':list_id', $list_id);
	// use exec() because no results are returned
	$stmt->execute();
  } catch(PDOException $e) {
	return $sql . "<br>" . $e->getMessage();
  }
}


if($_POST['function'] == "list") {
	echo insertList($name, $description, $conn);
	header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
}

if($_POST['function'] == "task") {
	insertTask($name, $duration, $status, $list_id, $conn);
	header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
}