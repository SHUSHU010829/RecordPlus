<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "project";
    
    $db = mysqli_connect($servername, $username, $password, $dbName);

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $select_db = mysqli_select_db($db, "$dbName");

    mysqli_set_charset($db,'utf8');

    if (!$select_db) {
        die("Select database failed: " . mysqli_error($db));
    }
    
?>