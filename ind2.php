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

<body style="background-color:#f1f1f1; padding:30px;">
    <div class="container">

        <div class="add-box container">
            <div style="margin-bottom:2%;" class="row">
                <h1 class="text-center col-sm-12">Add Todos</h1>

            </div>

            <?php foreach($todos as $todo){ ?>
            <div id="<?=$todo['id']?>" class="row todo hov">
                <input value="<?=$todo['todo']?>" id="todo<?=$todo['id']?>" class="todo-text" disabled type="text">



                <button onclick="markasdone(<?=$todo['id']?>)" id="btndone<?=$todo['id']?>" class="btn btn-success btn-left hide btn-sm ">done</button>
                <button onclick="edittodo(<?=$todo['id']?>,'<?=$todo['todo']?>')" id="btnedit<?=$todo['id']?>" class="btn btn-center btn-info hide btn-sm">edit</button>
                <button onclick="deletetodo(<?=$todo['id']?>)" id="btndelete<?=$todo['id']?>" class="btn btn-right btn-danger hide btn-sm">delete</button>
                <button onclick="update(<?=$todo['id']?>)" id="btnupdate<?=$todo['id']?>" class="btn btn-success btn-left hide btn-sm">update</button>
                <button onclick="cancel(<?=$todo['id']?>)" id="btncancel<?=$todo['id']?>" class="btn btn-danger btn-center hide btn-sm">cancel</button>

            </div>
            <?php } ?>

            <input id="newtodo" class="form-control" placeholder="Enter todo">
            <div class="text-center" style="padding-top:10px;">
                <button onclick="addtodo()" class="btn btn-secondary">Add</button>

            </div>



        </div>
        <br>
        <div class="container add-box">
            <button onclick="cleardone(1)" class="btn btn-info btn-right1">Clear</button>
            <h1>Completed Todos</h1>

            <?php 
                if($dones==null){ ?>
            <h3 class="text-center">Complete a Todo :)</h3>
            <?php } ?>
            <?php foreach($dones as $todo){ ?>
            <div id="<?=$todo['id']?>" class="row todo hov">

                <input value="<?=$todo['todo']?>" id="todo<?=$todo['id']?>" class="todo-text" disabled type="text">

                <button onclick="markasundone(<?=$todo['id']?>)" id="btndone<?=$todo['id']?>" class="btn btn-center hide btn-success btn-sm">un
                    done</button>

                <button onclick="deletetodo(<?=$todo['id']?>)" id="btndelete<?=$todo['id']?>" class="btn hide btn-right btn-danger btn-sm">delete</button>


            </div>
            <?php } ?>

        </div>
        <button onclick="cleardone(0)" class="btn btn-info btn-right-top">Clear All</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="JS/ind2.js"></script>
</body>

</html>