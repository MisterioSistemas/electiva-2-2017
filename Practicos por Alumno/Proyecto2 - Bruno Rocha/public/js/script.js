/**
 * Created by Hp 340 on 21/09/2017.
 */
$(function () {
    var token = $('#csrf-token').val();
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : token }
    });

    $('#btn-listo').click(function (event) {
        event.preventDefault();

        $.ajax({
            url: $('#form-insertar').attr('action'),
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            method: $('#form-insertar').attr('method'),
            data: $('#form-insertar').serialize(),
            dataType: 'JSON',
            success: function (response) {
                debugger;
                $(response).each(function (key, value) {
                    $('#contenedor-tarjetas').append("<div class='col s12 m4'><div class='card white darken-1'><div class='card-content black-text'><span class='card-title'>" + value.titulo + "</span><p>" + value.descripcion + "</p></div><div class='card-action'><form id='form-eliminar' name='form-eliminar' method='POST' action='http://localhost:8000/nota/" + value.id + "'" + "><input type='hidden' name='_token' value=" + token + " /><input type='hidden' name='_method' value='DELETE' /><input id='btn-eliminar' type='submit' class='waves-effect waves-teal btn-flat btn-listo' value='Eliminar'/></form></div></div></div>");
                });
            },
            error: function () {
                console.log('Error');
            }
        });
    });
});
$("#buscador").keyup(function (event) {
    var token = $('#csrf-token').val();
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : token }
    });
    var consulta = $(this).val();
    event.preventDefault();
    var metodo = $('#form-buscador').attr('method');
    var direccion = $('#form-buscador').attr('action');
    $.ajax({
        url: direccion,
        method: metodo,
        data: {
            key: consulta
        },
        dataType: 'JSON',
        success: function (response) {
            $('#contenedor-tarjetas').empty();
            if (response == "") {
                $('#contenedor-tarjetas').empty();
            } else {
                $(response).each(function (key, values) {
                    $("#contenedor-tarjetas").append("<div class='col s12 m4'><div class='card white darken-1'><div class='card-content black-text'><span class='card-title'>" + values.titulo + "</span><p>" + values.descripcion + "</p></div><div class='card-action'><form id='form-eliminar' name='form-eliminar' method='POST' action='http://localhost:8000/nota/" + values.id + "'" + "><input type='hidden' name='_token' value=" + token + " /><input type='hidden' name='_method' value='DELETE' /><input id='btn-eliminar' type='submit' class='waves-effect waves-teal btn-flat btn-listo' value='Eliminar'/></form></div></div></div>");
                });
            }
        },
        error: function () {
            console.log('Error');
        }
    });
});
