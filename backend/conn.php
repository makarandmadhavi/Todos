<?php
    $conn = mysqli_connect("mysqlHost", "root", "makopsjets", "todos");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
?>
