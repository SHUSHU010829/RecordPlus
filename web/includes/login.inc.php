<?php

if(isset($_POST["submit"])){
    $username = $_POST["ac"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if (emptyInputLogin($username, $pwd)!== false){
        //echo "<script>alert('Cannot Empty'); history.back();</script>";
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    loginUser($db,$username,$pwd);
    
}


else{
    header("location: ../login.php");
    exit();
}