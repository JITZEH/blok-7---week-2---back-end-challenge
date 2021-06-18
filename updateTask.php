<?php
require_once 'db_connection.php';
require_once 'functions.php';
?>
<html>

<head>
    <title>update task - Jitze van der Hoek</title>
    <link href='style.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<?php 
$tasks = loadTasksById();
foreach ($tasks as $key => $task)
{
if ($task["id"] == $_GET["id"]) {  
   $taskname = $task["name"];
   $taskstatus = $task["status"];
   $taskduration = $task["duration"];
?>

    <br>
    <h1><a href='index.php' style="margin:1em; text-decoration: none;">🔙</a> &nbsp; &nbsp; update the task: &nbsp; <?= $taskname ?> </h1>
    
    <form method="post" action="process.php" id="addtaskForm">
<?php 
}}
?>    
        <br>
        <input type="hidden" value="updatetask" name="function">
        <input type="hidden" value="<?= $_GET["id"]?>" name="taskid">
        <label class="formlabels" for="updatetaskName">name:</label>
        &nbsp;
        <input type="text" id="updateTaskName" name="updateTaskName" placeholder="<?= $taskname ?>">
        <br>
        <br>
        <label class="formlabels" for="updateTaskStatus">status:</label>
        &nbsp;
        <select type="text" id="updateTaskStatus" name="updateTaskStatus">
            <option value="" disabled selected hidden><?= $taskstatus ?></option>
            <option value='to do'>to do</option>
            <option value='busy'>busy</option>
            <option value='done'>done</option>
        </select>
        <br>
        <br>
        <label class="formlabels"for="updateTaskDuration">duration:</label>
        &nbsp;
        <input type="time" id="updateTaskDuration" name="updateTaskDuration" placeholder="<?= $taskduration ?>">
        <br>
        <br>
        <input type="submit" value="update <?= $taskname ?>">

    </form>

</body>

</html>
