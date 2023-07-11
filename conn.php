<?php
    // Koneksi database 
    $server = 'localhost';
    $db     = 'Day08';
    $name   = 'root';
    $password = '';

    $conn = mysqli_connect($server,$name,$password, $db);

    $weekend = "SELECT * FROM weekend";
    $weekends = mysqli_query($conn,$weekend);
   
    
?>