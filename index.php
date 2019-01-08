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

<body>
    <div style="margin-top:2%" class="container">
        <div class="row">
        <h1 class="text-center col-sm-9">Todos</h1>
        <button style="margin:2%" onclick="clearcompleted(0)" class="btn btn-info">clear all</button>
        </div>

        <?php foreach($todos as $todo){ ?>
        <div class="row mt">
            <input value="<?=$todo['todo']?>" id="todo<?=$todo['id']?>" class="form-control col-sm-9 font-weight-bold text-center"
                disabled type="text">


            <div class="col-sm-3">
                <button onclick="markasdone(<?=$todo['id']?>)" id="btndone<?=$todo['id']?>" class="btn btn-success">done</button>
                <button onclick="edittodo(<?=$todo['id']?>,'<?=$todo['todo']?>')" id="btnedit<?=$todo['id']?>" class="btn btn-info">edit</button>
                <button onclick="deletetodo(<?=$todo['id']?>)" id="btndelete<?=$todo['id']?>" class="btn btn-danger">delete</button>
                <button onclick="update(<?=$todo['id']?>)" id="btnupdate<?=$todo['id']?>" class="btn btn-success hide">update</button>
                <button onclick="cancel(<?=$todo['id']?>)" id="btncancel<?=$todo['id']?>" class="btn btn-danger hide">cancel</button>
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
    <div class="container">
        <h1 class="text-center col-sm-9">Completed</h1>
        
        <?php foreach($dones as $todo){ ?>
        <div class="row mt">

            <input value="<?=$todo['todo']?>" id="todo<?=$todo['id']?>" class="form-control col-sm-9 font-weight-bold text-center"
                disabled type="text">
            <div class="col-sm-3">
                <button onclick="markasundone(<?=$todo['id']?>)" id="btndone<?=$todo['id']?>" class="btn btn-success">un done</button>
                <button onclick="edittodo(<?=$todo['id']?>,'<?=$todo['todo']?>')" id="btnedit<?=$todo['id']?>" class="btn btn-info">edit</button>
                <button onclick="deletetodo(<?=$todo['id']?>)" id="btndelete<?=$todo['id']?>" class="btn btn-danger">delete</button>
                <button onclick="update(<?=$todo['id']?>)" id="btnupdate<?=$todo['id']?>" class="btn btn-success hide">update</button>
                <button onclick="cancel(<?=$todo['id']?>)" id="btncancel<?=$todo['id']?>" class="btn btn-danger hide">cancel</button>
            </div>
        </div>
        <?php } ?>
        <div class="d-flex justify-content-center col-sm-9">
        <button style="margin:5px" onclick="clearcompleted(1)" class="btn btn-info">clear completed</button>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="JS/index.js"></script>
</body>

</html>