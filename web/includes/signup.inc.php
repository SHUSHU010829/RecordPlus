<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $pwd, $pwdRepeat)!== false){
        echo "<script>alert('Cannot Empty'); history.back();</script>";
        //header("location: ../login.php?error=emptyinput");
        exit();
    }

    else if ($pwd !== $pwdRepeat){
        echo "<script>alert('Password is not match'); history.back();</script>";
        //header("location: ../login.php?error=pwddontmatch");
        exit();
    }
    
    else if (uidExists($db,$name, $email) !== false){
        echo "<script>alert('UserName / Email had been used!'); history.back();</script>";
        //header("location: ../login.php?error=pwddontmatch");
        exit();
    }

    createUser($db, $name,$email, $pwd);
    header("location: ../home.php");

}
else {
    header("location: ../login.php");
    exit();
}
