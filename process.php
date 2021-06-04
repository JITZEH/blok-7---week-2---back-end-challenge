<?php include 'db_connection.php';?>

<?php
 $conn = connect();
 var_dump($conn);
 $name=$_POST['name'];
 $description=$_POST['description'];
 $duration=$_POST['duration'];
 $status=$_POST['status'];
 $list_id=$_POST['list_id'];



if ($description != undefined) {
	try {
	$sql = "INSERT INTO lists (name, description)
	VALUES ('$name','$description')";
	// use exec() because no results are returned
	$conn->exec($sql);
  } catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
  }
}

if ($status != undefined) {
	try {
		$sql = "INSERT INTO tasks (name, status, duration, list_id)
		VALUES ('$name','$status','$duration','$list_id')";
		// use exec() because no results are returned
		$conn->exec($sql);
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}	
}
else {
	echo "je bent wat vergeten in te vullen";
}
