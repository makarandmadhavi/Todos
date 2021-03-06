temp = "";
var active=0;

jQuery.fn.putCursorAtEnd = function() {

    return this.each(function() {
      
      // Cache references
      var $el = $(this),
          el = this;
  
      // Only focus if input isn't already
      if (!$el.is(":focus")) {
       $el.focus();
      }
  
      // If this function exists... (IE 9+)
      if (el.setSelectionRange) {
  
        // Double the length because Opera is inconsistent about whether a carriage return is one character or two.
        var len = $el.val().length * 2;
        
        // Timeout seems to be required for Blink
        setTimeout(function() {
          el.setSelectionRange(len, len);
        }, 1);
      
      } else {
        
        // As a fallback, replace the contents with itself
        // Doesn't work in Chrome, but Chrome supports setSelectionRange
        $el.val($el.val());
        
      }
  
      // Scroll to the bottom, in case we're in a tall textarea
      // (Necessary for Firefox and Chrome)
      this.scrollTop = 999999;
  
    });
  
  };

function addtodo() {
    newtodo = $('#newtodo').val();
    console.log(newtodo);
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
    $('#todo' + id).focus().putCursorAtEnd();
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

function clearcompleted(all) {

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
    $('body').load("index.php");
}


$(".hov").hover(function () {
    //alert(this.id);
    if ($("#todo" + this.id).prop('disabled') && !active) {
        $('#btndone' + this.id).show(50);
        $('#btnedit' + this.id).show(50);
        $('#btndelete' + this.id).show(50);
    }
    else if(active==this.id){
        $('#btnupdate' + this.id).show(50);
        $('#btncancel' + this.id).show(50);
    }
}, function () {
    if ($("#todo" + this.id).prop('disabled')  && !active) {
    $('#btndone' + this.id).hide(50);
    $('#btnedit' + this.id).hide(50);
    $('#btndelete' + this.id).hide(50);
    }else if(active==this.id){
        $('#btnupdate' + this.id).hide(50);
        $('#btncancel' + this.id).hide(50);
    }
    //after hover
});

$("body").click(function(){
    if(active && event.target.nodeName=="BODY"){
        cancel(active);

    }
});