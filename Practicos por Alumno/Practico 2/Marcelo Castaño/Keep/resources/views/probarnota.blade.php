<html>
<head>

</head>
<body>
<a href="javascript:void(0)" id="btnajax">Ajax</a>
<div id="resultado"></div>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#btnajax').on('click', function () {
            $.ajax({
                method:'GET',
                url:'/notas/index',
                success:function (data) {
                   // console.log(data);
                   // $('#resultado').html(data);
                }
            })
        })
    })
</script>
</body>
</html>