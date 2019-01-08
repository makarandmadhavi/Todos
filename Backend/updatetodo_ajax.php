<?php
    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $newtodo = $data['newtodo'];
    $sql = "UPDATE todos SET todo='$newtodo' WHERE id='$id'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>