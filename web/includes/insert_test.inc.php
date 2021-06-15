<?php

if(isset($_POST["submit"])){
    $subject = $_POST["subject"];
    $quest = $_POST["quest"];
    $deadline = $_POST["deadline"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (TestExists($db, $username, $pwd)!== false){
        //echo "<script>alert('Cannot Empty'); history.back();</script>";
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    InsertTest($db, $subject, $quest, $deadline)
    
}

else{
    echo "<script>alert('insertfaile'); history.back();</script>";
    exit();
}