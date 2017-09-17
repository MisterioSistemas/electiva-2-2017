<html>
<head>

</head>
<body>
<a href="javascript:void(0)" id="btnLlamada">Llamar AJAX</a>
<div id="resultado"></div>
<input type="text" id="prueba"/>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#prueba').on('keyup',function(){
            console.log($('#prueba').val());
        });
        $('#btnLlamada').on('click', function () {
            $.ajax({
                method: 'GET',
                url: '/persona/traerajax',
                success: function (data) {
//                    console.log(data);

                    var objPrimeraPersona = data[0];
//                    console.log(objPrimeraPersona);
                    $('#resultado').html(objPrimeraPersona.nombre + ' ' + objPrimeraPersona.apellido);
//                    $('#resultado').html('<span>' + data + '</span>');
                }
            })
        });
    });
</script>
</body>
</html>