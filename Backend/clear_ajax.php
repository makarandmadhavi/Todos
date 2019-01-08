<?php
    include 'conn.php';
    $data = $_POST;
    $all = $data['all'];
    if($all==1){
    $sql = "DELETE FROM todos WHERE done=1";
    }
    else{
        $sql = "TRUNCATE TABLE todos";
    }
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>