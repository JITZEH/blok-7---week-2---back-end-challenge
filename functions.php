<?php
require_once 'db_connection.php';
function loadLists() { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM lists");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function loadTasksByListId($id, $sort, $filter) { 
  $conn = connect();
  $sql = "SELECT * FROM tasks WHERE list_id=:id"; 
  if (isset($sort)){
    if ($filter == 'all'){
      $sql .=" ORDER BY duration $sort";
    }
    else {
      $sql .= " AND status=:filter ORDER BY duration $sort";
    }
    
  }
  else {
    $sql = $sql;
  } 
    $stmt = $conn->prepare($sql);
    if ($filter != 'all'){
    $stmt->bindParam(":filter", $filter);
    }
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}

function loadTasksById() { 
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM tasks");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
      
}






?>