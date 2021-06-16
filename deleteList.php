<?php
require_once 'db_connection.php';
require_once 'functions.php';
?>
<html>

<head>
    <title>add list - Jitze van der Hoek</title>
    <link href='stylesheet.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
<?php 
$lists = loadLists();
foreach ($lists as $key => $list)
{
if ($list["id"] == $_GET["id"]) {  
   $listname = $list["name"];
?>

    <br>
    <h1><a href='index.php' style="margin:1em; text-decoration: none;">🔙</a> &nbsp; &nbsp; do you want to delete this list: <i style="color:red;"><?= $listname ?></i></h1>
    
    <form method="post" action="process.php" id="addListForm">
<?php 
}}
?>    
        &nbsp;
        <select type="text" id="wanttodelete" name="wanttodelete">
            <option value='yes' selected>yes</option>
            <option value='no'>no</option>
        </select>
        <input type="hidden" value="deletelist" name="function">
        <input type="hidden" value="<?= $_GET["id"]?>" name="listid">
        <br>
        <br>
        <input type="submit" class="btn btn-danger"value="delete <?= $listname ?>">
    </form>

</body>

</html>
