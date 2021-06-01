<?php
require_once 'db_connection.php';
require_once 'functions.php';
?>
<html>

<head>
    <title>add task - Jitze van der Hoek</title>
    <link href='style.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <br>
    <h1><a href='index.php' style="margin:1em; text-decoration: none;">🔙</a> &nbsp; &nbsp; create a new task:</h1>
    
    <form method="post" action="process.php" id="addTaskForm">
        <label class="formlabels" for="name">name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label class="formlabels"for="duration">description:</label>
        <input type="text" id="duration" name="duration">
        <br>
        <br>
        <label class="formlabels" for="duration">duration:</label>
        <input type="time" id="duration" name="duration">
        <br>
        <br>
        <label class="formlabels" for="selectlist">add task at:</label>
        <select name="selectlist" id="selectlist" class="form-select-lg mb-3">
            <?php
$lists = loadLists();
foreach ($lists as $key => $list)
{
?>
            <option value='<?=$list["id"] ?>'><?=$list["name"] ?></option>
            <?php
}
?>
        </select>
        <br>
        <br>
        <input type="submit" value="add list">

    </form>

</body>

</html>
