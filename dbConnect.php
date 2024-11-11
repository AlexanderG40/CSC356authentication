<?php
    $dbServerName = "sql313.infinityfree.com";
    $dbUserName = 'if0_37690336';
    $dbPassword = 'HZ4sLTBjkXMW0';
    $dbName = 'if0_37690336_php356';

    // use the variables to connect to the database
    $dbConn = mysqli_connect($dbUserName, $dbUserName, $dbPassword, $dbName);

    // test to see if the connection failed
    if (!$dbConn){
        echo "Connection failed.";
    }
?>