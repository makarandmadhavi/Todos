<?php include 'Backend/getdata.php' ?>
<?php
$todos=getundone();
$dones=getdone();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body class="bg">
    <div class="container outer">
        <button onclick="clearcompleted(0)" class="btn btn-info clearbtn">clear all</button>
        <div style="margin-top:2%" class="container shadow pad">
            <div style="margin-bottom:2%;" class="row">
                <h1 class="text-center col-sm-12">Todos</h1>

            </div>

            <?php foreach($todos as $todo){ ?>
            <div id="<?=$todo['id']?>" style="height:35px;" class="row btncenter hov">
                <input value="<?=$todo['todo']?>" id="todo<?=$todo['id']?>" class="col-sm-9 text-center" disabled type="text">


                <div style="margin-left:1%; margin-top:2px">
                    <button onclick="markasdone(<?=$todo['id']?>)" id="btndone<?=$todo['id']?>" class="btn btn-success hide btn-sm ">done</button>
                    <button onclick="edittodo(<?=$todo['id']?>,'<?=$todo['todo']?>')" id="btnedit<?=$todo['id']?>"
                        class="btn btn-info hide btn-sm">edit</button>
                    <button onclick="deletetodo(<?=$todo['id']?>)" id="btndelete<?=$todo['id']?>" class="btn btn-danger hide btn-sm">delete</button>
                    <button onclick="update(<?=$todo['id']?>)" id="btnupdate<?=$todo['id']?>" class="btn btn-success hide btn-sm">update</button>
                    <button onclick="cancel(<?=$todo['id']?>)" id="btncancel<?=$todo['id']?>" class="btn btn-danger hide btn-sm">cancel</button>
                </div>
            </div>
            <?php } ?>

            <div class="row mt">
                <input placeholder="Add a to do" id="newtodo" class="form-control col-sm-9 " type="text">
                <div class="col-sm-3">
                    <button onclick="addtodo()" class="btn btn-success col-sm-10">Add</button>

                </div>
            </div>



        </div>
        <br>
        <div style="padding-top:1%;" class="container shadow pad">
        <button onclick="clearcompleted(1)" class="btn btn-info clearcompbtn">clear completed</button>
            <h1 style="margin-top:-10px; margin-bottom:20px;" class="text-center ">Completed</h1>
           
                <?php 
                if($dones==null){ ?>
                    <h3 class="text-center">Complete a Todo :)</h3>
                <?php } ?>
            <?php foreach($dones as $todo){ ?>
            <div id="<?=$todo['id']?>" class="row hov">

                <input value="<?=$todo['todo']?>" id="todo<?=$todo['id']?>" class="form-control col-sm-9 text-center"
                    disabled type="text">
                <div style="margin-left:1%; margin-top:3px">
                    <button onclick="markasundone(<?=$todo['id']?>)" id="btndone<?=$todo['id']?>" class="btn hide btn-success btn-sm">un
                        done</button>

                    <button onclick="deletetodo(<?=$todo['id']?>)" id="btndelete<?=$todo['id']?>" class="btn hide btn-danger btn-sm">delete</button>

                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="JS/index.js"></script>
</body>

</html>