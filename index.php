<?php
require 'db_connection.php';
require_once 'functions.php';
?>

<html>

<head>
    <title>lists - Jitze van der Hoek</title>
    <link href='stylesheet.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <h3>To DO</h3>
<h3><a href="addList.php">add a List</a></h3>

<!-- lists -->


<?php
    $lists = loadLists();
    foreach($lists as $key => $list){
?>
<div class="list-group dropup">
<div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle list-group-item list-group-item-action active" data-bs-toggle="dropdown" aria-expanded="true">
  <span style="font-weight:bold;"><?= $list["name"] ?></span>
  </button>
  <!-- <ul class="dropup-menu">
    <button type="button" class="list-group-item list-group-item-action dropup-item"><?= $list["description"] ?></button>
  </ul> -->
</div>

<?php
    $tasks = loadTasks();
    foreach($tasks as $key => $task){
?>
    <label class="list-group-item" style="font-weight:bold;">
        <input class="form-check-input me-1" type="checkbox" value="">
        <?= $task["name"] ?>
    </label>
<?php
    }
?>
    <div class="btn-group list-group-item" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger">delete list</button> 
        <button type="button" class="btn btn-warning">Middle</button>
        <button type="button" class="btn btn-success" ><a href='addTask.php?id=<?= $list["id"] ?>' class="linkFontWhite">add task</a></button>
    </div>
</div>
  <br>
  <br>

  
<?php
    }
?>

<!-- lists -->


</body>

</html>
