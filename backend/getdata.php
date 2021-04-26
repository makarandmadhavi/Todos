<?php
    
    function getundone(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM todos WHERE done=0";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

    function getdone(){
        include 'conn.php';
        $data = array();
        $sql = "SELECT * FROM todos WHERE done=1";
        $result = $conn->query($sql);
        if($result){     
            while($row = $result -> fetch_assoc()){
            array_push($data,$row);
            }
        }
    return $data;
    }

?>