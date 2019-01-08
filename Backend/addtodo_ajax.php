<?php
    include 'conn.php';
    $data = $_POST;
    $newtodo = $data['newtodo'];
    $sql = "INSERT INTO todos (todo) VALUES('$newtodo')";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>