$(document).ready(function () {
    $("#search").keyup( function () {
        let input = $(this).val();    
        if(input != ''){
            $.ajax({
                url: "handle.php",
                method: "POST",
                data: {input: input},
                success: function (data)
                {                              
                   $("#tbody").html(data);
                },
            })
        }    
    });

    //jquery validation-
    //validation for email
    $('#email').keyup(function(){
        if(validateEmail()){
            $("#emailmsg").html('Validated');
            $("#emailmsg").css('color','green');
        }
        else{
            $("#emailmsg").html('Unvalid Email');
            $("#emailmsg").css('color','red');
        }
    });
    function validateEmail(){
        let email = $("#email").val();
        let regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
        if(regex.test(email)){
            return true;
        }
        else{
            return false;
        }
    }
    //validation for password and confirm password
    $('#cpass').keyup(function(){
        let pwd = $('#pwd').val();
        let cpass = $('#cpass').val();

        if(cpass != pwd){
            $('#showErrorcPwd').html('**Password are not matching');
            $('#showErrorcPwd').css('color','red');
            return false;
        }
        else{
            $('#showErrorcPwd').html('');
            return true;
        }
    });
     
});

$(document).on("click",".column_sort",function(){
    sortTable();
    // $('#tbody').hide();
   
})

    function sortTable(columnName){
      
        let sort = $("#sort").val();
        console.log("here")
        $.ajax({
         url:'sort.php',
         type:'post',
         data:{columnName:columnName,sort:sort},
         success: function(response){
        
          $("#empTable tr:not(:first)").remove();
        
          $("#empTable").append(response);
          if(sort == "asc"){
            $("#sort").val("desc");
          }else{
            $("#sort").val("asc");
          }
        
         }
        });
       }
