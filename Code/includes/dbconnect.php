<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'induction';

    $con = mysqli_connect($server, $user, $password, $db);

    if(!$con){

        die('Could not connect');
    }

?>
