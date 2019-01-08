temp="";

function addtodo(){
    newtodo= $('#newtodo').val();
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
            if(data == "SUCCESS"){
                //alert("Successfully Registered");
                window.location = '';
            }
            else{
                alert("Failed");
            }
        }
    });
}

function markasdone(id){
   
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
            if(data == "SUCCESS"){
                //alert("Successfully Registered");
                window.location = '';
            }
            else{
                alert("failed");
                //console.log(data);
            }
        }
    });
}

function markasundone(id){
   
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
             if(data == "SUCCESS"){
                 //alert("Successfully Registered");
                window.location = '';
             }
             else{
                 alert("failed");
                 //console.log(data);
             }
         }
     });
 }

 function deletetodo(id){
   
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
             if(data == "SUCCESS"){
                 //alert("Successfully Registered");
                 window.location = '';
             }
             else{
                 alert("failed");
                 //console.log(data);
             }
         }
     });
 }

 function edittodo(id,txt){
     temp=txt;
     $('#todo'+id).removeAttr("disabled");
     $('#btnedit'+id).hide();
     $('#btndelete'+id).hide();
     $('#btndone'+id).hide();
     $('#btncancel'+id).show();
     $('#btnupdate'+id).show();
 }

 function cancel(id){
     console.log(temp);
    $('#todo'+id).val(temp);
    $('#todo'+id).attr("disabled","disabled");
    $('#btnedit'+id).show();
    $('#btndelete'+id).show();
    $('#btndone'+id).show();
    $('#btncancel'+id).hide();
    $('#btnupdate'+id).hide();
}

function update(id){
    newtodo= $('#todo'+id).val();
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
            if(data == "SUCCESS"){
                //alert("Successfully Registered");
                window.location = '';
            }
            else{
                alert("Failed");
            }
        }
    });
}

function clearcompleted(all){
    
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
            if(data == "SUCCESS"){
                //alert("Successfully Registered");
                window.location = '';
            }
            else{
                alert("Failed");
            }
        }
    });
}