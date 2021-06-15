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
    $stmt = mysqli_stmt_init($db); //初始化 (連結db)
    if(!mysqli_stmt_prepare($stmt,$sql)){ //cheak會不會通過
        echo "<script>alert('Stmt failed'); history.back();</script>";
        //header("loction: ../login.php?error=stmtfailed");
        exit();
    }
    //把準備好的資料來源 string 把$name, $email引用給 $sql的?
    mysqli_stmt_bind_param($stmt, "ss", $name, $email); 
    //實際運行 $stmt
    mysqli_stmt_execute($stmt);
    //從準備好的SQL獲取結果
    $resultData = mysqli_stmt_get_result($stmt);
    //從resultData 實現一行作為關聯組
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    //回傳錯誤
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

function deleteUser($db,$username){
    $username = $_GET['name'];
    $sql_query = "DELETE FROM user WHERE UserName = $username";
    mysqli_query($db,$sql_query);
    $db->close();
    header("Location: ../login.php");
}

function TestExists($db, $subject){
    $sql = "SELECT * FROM user WHERE UserName = ? ;";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "<script>alert('Stmt failed'); history.back();</script>";
        //header("loction: ../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $subjectl);
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


function InsertTest($db, $subject, $quest, $deadline){
    $sql = "INSERT INTO test (CouseID, T_Time, T_Range) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($db);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "<script>alert('Stmt creat failed'); history.back();</script>";
       // header("loction: ../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"sss",$subject,$deadline,$quest);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
