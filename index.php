<?php
require 'db_connection.php';
?>
<html>

<head>
    <title>add list - Jitze van der Hoek</title>
</head>

<body>
    <h3>maak een nieuwe lijst:</h3>
    <form action="/new_list.php">
        <label for="name">name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for="description">description:</label>
        <input type="text" id="description" name="description">
        <br>
        <br>
        <input type="submit" value="Submit">

    </form>

</body>

</html>
