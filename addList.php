<?php
require_once 'db_connection.php';
require_once 'functions.php';
?>
<html>

<head>
    <title>add list - Jitze van der Hoek</title>
</head>

<body>
<a href='index.php' style="font-size: 75px; text-decoration: none;">🔙</a>
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
