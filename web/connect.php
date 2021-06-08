<?php
    $servername = "database.c1ybvy6sb4oz.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "rzVMaQiwVYL4vC1boOdv";
    $dbName = "project";
    
    $db = mysqli_connect($servername, $username, $password, $dbName);

    if(mysqli_connect_errno($db))
	    echo "無法對資料庫連線！" . mysqli_connect_error();

    mysqli_set_charset($db,'utf8');

    if(!@mysqli_select_db($db,'project'))
        die("無法使用資料庫");
?>