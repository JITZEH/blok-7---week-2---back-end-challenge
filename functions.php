<?php
require_once 'db_connection.php';
function loadLists() { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM lists");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function loadTasksByListId($id) { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE list_id=:id");
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
      echo $test;
}

function loadTasksById() { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM tasks");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
      echo $test;
}
?>


