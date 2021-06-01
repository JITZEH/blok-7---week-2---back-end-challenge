<?php
require_once 'db_connection.php';
function loadLists() { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM lists");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function loadTasks() { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM tasks");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}

?>


