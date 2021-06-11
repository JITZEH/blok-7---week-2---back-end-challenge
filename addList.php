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
    <br>
    <h1><a href='index.php' style="margin:1em; text-decoration: none;">🔙</a> &nbsp; &nbsp; create a new list:</h1>
    
    <form method="post" action="process.php" id="addListForm">
        <input type="hidden" value="list" name="function">
        <label class="formlabels" for="name">name:</label>
        &nbsp;
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label class="formlabels"for="description">description:</label>
        &nbsp;
        <input type="text" id="description" name="description">
        <br>
        <br>
        <input type="submit" value="add list">

    </form>

</body>

</html>
