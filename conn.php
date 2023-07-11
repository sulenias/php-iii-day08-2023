<?php

    // koneksi database
    $server = 'localhost';
    $db = 'day08';
    $name = 'root';
    $password = '';

    $conn = mysqli_connect($server, $name, $password, $db);

    $weekend = "SELECT * FROM weekend";
    $sql = mysqli_query($conn,$weekend);

    var_dump($weekend);


?>