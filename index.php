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
    <div class="container">
        <h1 class="text-center">Todos</h1>

        <?php foreach($todos as $todo){ ?>
        <div class="row mt">
            <input value="<?=$todo['todo']?>" class="form-control col-sm-9 font-weight-bold text-center"
                disabled type="text">


            <div class="col-sm-3">
                <button onclick="markasdone(<?=$todo['id']?>)" class="btn btn-success">done</button>
                <button class="btn btn-info">edit</button>
                <button onclick="deletetodo(<?=$todo['id']?>)" class="btn btn-danger">delete</button>
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
        <h1 class="text-center">Completed</h1>
        <?php foreach($dones as $todo){ ?>
        <div class="row mt">

            <input value="<?=$todo['todo']?>" class="form-control col-sm-9 font-weight-bold text-center"
                disabled type="text">
            <div class="col-sm-3">
                <button onclick="markasundone(<?=$todo['id']?>)" class="btn btn-success">un done</button>
                <button class="btn btn-info">edit</button>
                <button onclick="deletetodo(<?=$todo['id']?>)" class="btn btn-danger">delete</button>
            </div>
        </div>
        <?php } ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="JS/index.js"></script>
</body>

</html>