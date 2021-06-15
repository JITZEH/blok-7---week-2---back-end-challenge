<?php
require_once 'db_connection.php';
require_once 'functions.php';
?>
<html>

<head>
    <title>add task - Jitze van der Hoek</title>
    <link href='stylesheet.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <h1><a href='index.php' style="margin:1em; text-decoration: none;">🔙</a> &nbsp; &nbsp; create a new task:</h1>
    
    <form method="post" action="process.php" id="addTaskForm" >
        <input type="hidden" value="task" name="function">
        <label class="formlabels" for="name">name:</label>
        &nbsp;
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label class="formlabels" for="status">status:</label>
        &nbsp;
        <select type="text" id="status" name="status">
            <option value='to_do' selected>to do</option>
            <option value='busy'>busy</option>
            <option value='done'>done</option>
        </select>
        <br>
        <br>
        <label class="formlabels"for="duration">duration:</label>
        &nbsp;
        <input type="time" id="duration" name="duration">
        <br>
        <br>
        <label class="formlabels" for="list_id">add task at:</label>
        &nbsp;
        <select name="list_id" id="list_id" class="form-select-lg mb-3">
            <?php
$lists = loadLists();
foreach ($lists as $key => $list)
{
    if ($list["id"] == $_GET["id"]) {   
?>
    <option selected value='<?=$list["id"] ?>'><?=$list["name"] ?></option>
<?php
    }else{
?>
          <option value='<?=$list["id"] ?>'><?=$list["name"] ?></option>
<?php
    }
}
?>
        </select>
        <br>
        <br>
        <input type="submit" value="add task">

    </form>

</body>

</html>
