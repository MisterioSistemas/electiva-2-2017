
$(document).ready(function () {
    
    $("#categoriapadre").hide();
    $(".des").click(function (evento) {
        var val = $(this).val();
        if (val == "1") {
            $("#categoriapadre").hide();
        } else if (val == "0") {
            $("#categoriapadre").show();
        }
    });
});
function Agregar(accxjCcat, accxjCjue) {
    var a = $("#checCat" + accxjCcat).is(':checked') ? 1 : 0;
    debugger;
    $.ajax({
        data: {"accxjCcat": accxjCcat, "accxjCjue": accxjCjue, "checked": a},
        url: 'DAO/BLL/Accaxj.php',
        dataType: 'JSON',
        type: 'post',
        success: function (response) {
            debugger;
            return "asdasd";
        }, error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
        }
    });
}

