<?php

    $sname = 'infinityfree';
    $unmae = 'epiz_33729133';
    $password = 'mmzl12345';
    $db_name = 'teamproject1';

    $conn = mysqli_connect($sname, $unmae, $password, $db_name);

    if (!$conn){
        echo 'Connection faild';
    } else {
        echo 'Conneted';
    }

?>

