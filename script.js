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
                   $("#search_result").html(data);
                },
            })
        }    
    });
});