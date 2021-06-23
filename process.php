<?php
 	include 'db_connection.php';
	include 'functions.php';
?>

<?php
 $conn = connect();
 var_dump($conn);
 $name=$_POST['name'];
 $description=$_POST['description'];
 $duration=$_POST['duration'];
 $status=$_POST['status'];
 $list_id=$_POST['list_id'];
 $updateListName=$_POST['updateListName'];
 $updateListDescription=$_POST['updateListDescription'];
 $updateTaskName=$_POST['updateTaskName'];
 $updateTaskStatus=$_POST['updateTaskStatus'];
 $updateTaskDuration=$_POST['updateTaskDuration'];



 function insertList($name, $description, $conn) {
	try {
		$sql =  "INSERT INTO lists (name, description)
		VALUES (:name,:description)" ;
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':description', $description);
	$stmt->execute();
	loadLists();	
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
if($_POST['function'] == "deletetask") {
	if ($_POST['wanttodelete'] == 'yes') {	
		deleteTask($conn);
		header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
	}
	else {
		header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
	}
}

if($_POST['function'] == "updatelist") {
	updateList($conn, $updateListName, $updateListDescription);
	header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
}
if($_POST['function'] == "updatetask") {
	updateTask($conn, $updateTaskName, $updateTaskStatus, $updateTaskDuration);
	header("Location: http://localhost/blok%207%20-%20week%202%20-%20back-end%20challenge/index.php");
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

function deleteTask($conn) {
	
	$taskid = $_POST['taskid'];
		try {
			$sql = "DELETE FROM `tasks` WHERE id=:taskid";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':taskid', $taskid);
		$stmt->execute();
	  } catch(PDOException $e) {
		return $sql . "<br>" . $e->getMessage();
	  }
	
	}

function updateList($conn, $updateListName, $updateListDescription) {
	
	$listid = $_POST['listid'];
		try {
			$sql = "UPDATE `lists` SET name = :name, description = :description WHERE id=:listid";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':name', $updateListName);
			$stmt->bindParam(':description', $updateListDescription);
			$stmt->bindParam(':listid', $listid);
			$stmt->execute();
	  } catch(PDOException $e) {
		return $sql . "<br>" . $e->getMessage();
		
	  }
}

function updateTask($conn, $updateTaskName, $updateTaskStatus, $updateTaskDuration) {
	
	$taskid = $_POST['taskid'];
		try {
			$sql = "UPDATE `tasks` SET name = :name, status = :status, duration = :duration WHERE id=:taskid";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':name', $updateTaskName);
			$stmt->bindParam(':status', $updateTaskStatus);
			$stmt->bindParam(':duration', $updateTaskDuration);
			$stmt->bindParam(':taskid', $taskid);
			$stmt->execute();
		} catch(PDOException $e) {
		return $sql . "<br>" . $e->getMessage();
		
	  }
}