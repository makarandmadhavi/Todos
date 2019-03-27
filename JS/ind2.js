temp = "";
var active=0;


function addtodo() {
    newtodo = $('#newtodo').val();
    //console.log(newtodo);
    // console.log(y);
    $.ajax({
        type: "POST",
        url: "backend/addtodo_ajax.php",
        data: {
            //data goes here
            newtodo
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                //alert("Successfully Registered");
                reload();
            } else {
                alert("Failed");
            }
        }
    });
}

function markasdone(id) {

    //console.log(id);
    $.ajax({
        type: "POST",
        url: "backend/markasdone_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                //alert("Successfully Registered");
                reload();
            } else {
                alert("failed");
                //console.log(data);
            }
        }
    });
}

function markasundone(id) {

    //console.log(id);
    $.ajax({
        type: "POST",
        url: "backend/markasundone_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                //alert("Successfully Registered");
                reload();
            } else {
                alert("failed");
                //console.log(data);
            }
        }
    });
}

function deletetodo(id) {

    //console.log(id);
    $.ajax({
        type: "POST",
        url: "backend/deletetodo_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                //alert("Successfully Registered");
                reload();
            } else {
                alert("failed");
                //console.log(data);
            }
        }
    });
}

function edittodo(id, txt) {
    temp = txt;
    active=id;
    $('#todo' + id).removeAttr("disabled");
    moveCursorToEnd($('#todo'+id));
    $('#todo' + id).focus();
    $('#btnedit' + id).hide();
    $('#btndelete' + id).hide();
    $('#btndone' + id).hide();
    $('#btncancel' + id).show();
    $('#btnupdate' + id).show();
}

function cancel(id) {
    active=0;
    console.log(temp);
    $('#todo' + id).val(temp);
    $('#todo' + id).attr("disabled", "disabled");
    $('#btncancel' + id).hide();
    $('#btnupdate' + id).hide();
}

function update(id) {
    newtodo = $('#todo' + id).val();
    console.log(newtodo);
    // console.log(y);
    $.ajax({
        type: "POST",
        url: "backend/updatetodo_ajax.php",
        data: {
            //data goes here
            newtodo,
            id
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                //alert("Successfully Registered");
                reload();
            } else {
                alert("Failed");
            }
        }
    });
}

function cleardone(all) {

    console.log(newtodo);
    // console.log(y);
    $.ajax({
        type: "POST",
        url: "backend/clear_ajax.php",
        data: {
            //data goes here
            all
        },
        success: function (data) {
            //data is returned here
            if (data == "SUCCESS") {
                //alert("Successfully Registered");
                reload();
            } else {
                alert("Failed");
            }
        }
    });
}

function reload() {
    $('body').load("ind2.php");
}


$(".hov").hover(function () {
    //alert(this.id);
    if ($("#todo" + this.id).prop('disabled') && !active) {
        $('#btndone' + this.id).fadeIn(800);
        $('#btnedit' + this.id).fadeIn(800);
        $('#btndelete' + this.id).fadeIn(800);
    }
    else if(active==this.id){
        $('#btnupdate' + this.id).fadeIn(800);
        $('#btncancel' + this.id).fadeIn(800);
    }
}, function () {
    if ($("#todo" + this.id).prop('disabled')  && !active) {
    $('#btndone' + this.id).fadeOut(400);
    $('#btnedit' + this.id).fadeOut(400);
    $('#btndelete' + this.id).fadeOut(400);
    }else if(active==this.id){
        $('#btnupdate' + this.id).fadeOut(400);
        $('#btncancel' + this.id).fadeOut(400);
    }
    //after hover
});

$("body").click(function(){
    //console.log(event.target.nodeName);
    if(active && (event.target.nodeName=="BODY" || active && event.target.nodeName=="DIV") ){
        cancel(active);
        //console.log("Cancel"+active);

    }
});

function moveCursorToEnd(input) {
    var originalValue = input.val();
    input.val('');
    input.blur().focus().val(originalValue);
}
  
