/*$(document).on('submit', '#addUser', function(e) {
        e.preventDefault();
    
        var formData = new FormData(this);
        formData.append("insert_user", true);
    
        $.ajax({
            type: "POST",
            url: "server.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var res = jQuery.parseJSON(response);
                if (res.status == 200) {
                    $('#defaultModal').modal('hide');
                    alert(res.message);
                }
            }
        });
    });*/

$(".btnGetID").click(function()
{
        var a = $(this).val();
        $('#getUserID').val(a);
});

$(".delUser").click(function(){
        var a = $(this).val();
        $('#addDeleteID').attr("href", "delete/" + a);
});