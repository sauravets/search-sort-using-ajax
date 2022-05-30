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
    $(document).on("click","#table_head",function(){
        sortTable();
    })
        
   
});
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
