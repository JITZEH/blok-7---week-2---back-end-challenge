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

if($_POST['function'] == "deletelist") {
	if ($_POST['wanttodelete'] == 'yes') {	
		deleteList($conn);
		header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
	}
	else {
		header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
	}
}



function deleteList($conn) {
	
$listid = $_POST['listid'];
	try {
		$sql = "DELETE FROM `lists` WHERE id=:listid";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':listid', $listid);
	$stmt->execute();
  } catch(PDOException $e) {
	return $sql . "<br>" . $e->getMessage();
  }

}


function deleteList($conn) {
	
	$listid = $_POST['listid'];
		try {
			$sql = "UPDATE `lists` SET column1 = value1, column2 = value2,";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':listid', $listid);
		$stmt->execute();
	  } catch(PDOException $e) {
		return $sql . "<br>" . $e->getMessage();
	  }
	
	}

UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;