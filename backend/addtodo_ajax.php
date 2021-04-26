<?php
    include 'conn.php';
    $data = $_POST;
    $newtodo = $data['newtodo'];
    $sql = "INSERT INTO `todos` (`todo`, `done`) VALUES ('$newtodo', '0');";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>
