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