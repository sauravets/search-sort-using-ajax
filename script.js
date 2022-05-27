$(document).ready(function () {
    $("#search").on('keyup', function () {
        let value = $(this).val();        
        $.ajax({
            url: "conn.php",
            method: "POST",
            data: {value: value},
            success: function (data)
            {               
                // if (data == 1) {
                //     document.write("insert");
                // }
                // else{
                //     document.write("insert not");

                // }                
               $("#emp_table").html(data);
            },
           // error: function(e, ts, et) { alert(ts) }
        });
    });
});