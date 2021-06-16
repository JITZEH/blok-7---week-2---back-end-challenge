<?php
require 'db_connection.php';
require_once 'functions.php';
?>

<html>

<head>
    <title>lists - Jitze van der Hoek</title>
    <link href='stylesheet.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <h3>To DO</h3>
    <h3><a href="addList.php">add a List</a></h3>

    <!-- lists -->


    <?php
    $lists = loadLists();
    foreach($lists as $key => $list){

?>
        <div class="list-group dropup ">
            <div class="btn-group dropup ">
                <button type="button" class="btn btn-secondary dropdown-toggle list-group-item list-group-item-action active" data-bs-toggle="dropdown" aria-expanded="true">
                    <span style="font-weight:bold;"><?= $list["name"] ?></span>
                </button>
                <!-- <ul class="dropup-menu">
    <button type="button" class="list-group-item list-group-item-action dropup-item"><?= $list["description"] ?></button>
  </ul> -->
            </div>

            <?php
    $test = $list["id"] ;
    $tasks = loadTasks($test);
    foreach($tasks as $key => $task){
        
?>
            <label class="list-group-item" style="font-weight:bold;">
                <span>📄</span>&nbsp; <?= $task["name"] ?> 
                <br>
                <span>🕔</span> &nbsp;<?= $task["duration"] ?>
                <br>
                <span>✅</span> &nbsp; <?= $task["status"] ?>

            </label>
            <?php
    }
?>
            <div class="btn-group list-group-item" role="group" >
                <button type="button" class="btn btn-danger"><a href='deleteList.php?id=<?= $list["id"] ?>' class="linkFontWhite">delete list</button>
                <button type="button" class="btn btn-warning"><a href='updateList.php?id=<?= $list["id"] ?>' class="linkFontWhite">update</button>
                <button type="button" class="btn btn-success"><a href='addTask.php?id=<?= $list["id"] ?>' class="linkFontWhite">add task</a></button>
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