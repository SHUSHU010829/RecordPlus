<?php

function emptyInputSignup($name, $email, $pwd, $pwdRepeat){
    $result;
    if(empty($name)||empty($email)||empty($pwd)||empty($pwdRepeat)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
}

function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username)||empty($pwd)){
       $result = true; 
    }
    else{
        $result = false;
    }
    return $result;
}
    
function uidExists($db, $name, $email){
    $sql = "SELECT * FROM user WHERE UserName = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "<script>alert('Stmt failed'); history.back();</script>";
        //header("loction: ../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($db, $name,$email, $pwd){
    $sql = "INSERT INTO user (UserName, Email, Pwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "<script>alert('Stmt creat failed'); history.back();</script>";
       // header("loction: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"sss",$name,$email,$pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function loginUser($db,$username,$pwd){
    $sql = "SELECT * FROM user WHERE UserName = ? OR Pwd = ?;";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "<script>alert('Stmt failed'); history.back();</script>";
        //header("loction: ../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $pwd);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        //echo "<script>alert('Login Success!');</script>";
        header("location: ../home.php");
        exit();
    }
    else {
        header("location: ../login.php?error=wrongnameorpwd");
        exit();
    }
}