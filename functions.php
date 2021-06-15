<?php
require_once 'db_connection.php';
function loadLists() { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM lists");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function loadTasks($test) { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE list_id=:test");
    $stmt->bindParam(":test",$test);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
      echo $test;
}

?>


