<?php
require_once 'db_connection.php';
require_once 'functions.php';
?>
<html>

<head>
    <title>To Do list - Jitze van der Hoek</title>
</head>

<body>
    <h3>maak een nieuwe lijst:</h3>
    <form method="post" action="process.php">
        <label for="name">name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for="description">description:</label>
        <input type="text" id="description" name="description">
        <br>
        <br>
        <input type="submit" value="add list">

    </form>

</body>

</html>
<ul>
<?php
    $lists = loadLists();
    foreach($lists as $key => $list){
?>
    <li>
        <span style="font-weight:bold;">name:<?= $list["name"] ?></span> &nbsp; <span>desc:<?= $list["description"] ?></span>
    </li>


<?php
    }
?>
