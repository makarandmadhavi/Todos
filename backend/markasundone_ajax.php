<?php
    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $sql = "UPDATE todos SET done=0 WHERE id='$id'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>