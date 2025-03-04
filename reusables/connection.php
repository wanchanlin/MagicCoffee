<?php
    $servername = "sql102.infinityfree.com";
    $username = "if0_38440812";
    $password = "fSOYTCvVIOtK";
    $dbname = "if0_38440812_coffee";

    $connect = mysqli_connect($servername, $username, $password, $dbname);


    if(!$connect){
        echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
        echo 'Error Message: ' . mysqli_connect_error();
        exit;
    }
?>