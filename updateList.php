<?php
require_once 'db_connection.php';
require_once 'functions.php';
?>
<html>

<head>
    <title>update list - Jitze van der Hoek</title>
    <link href='style.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<?php 
$lists = loadLists();
foreach ($lists as $key => $list)
{
if ($list["id"] == $_GET["id"]) {  
   $listname = $list["name"];
   $listdescription = $list["description"];
?>

    <br>
    <h1><a href='index.php' style="margin:1em; text-decoration: none;">🔙</a> &nbsp; &nbsp; update the list: &nbsp; <?= $listname ?> </h1>
    
    <form method="post" action="process.php" id="addListForm">
<?php 
}}
?>    
        <br>
        <input type="hidden" value="updatelist" name="function">
        <input type="hidden" value="<?= $_GET["id"]?>" name="listid">
        <label class="formlabels" for="updateListName">name:</label>
        &nbsp;
        <input type="text" id="updateListName" name="updateListName" placeholder="<?= $listname ?>">
        <br>
        <br>
        <label class="formlabels"for="updateListDescription">description:</label>
        &nbsp;
        <input type="text" id="updateListDescription" name="updateListDescription" placeholder="<?= $listdescription?> ">
        <br>
        <br>
        <input type="submit" value="update <?= $listname ?>">

    </form>

</body>

</html>
