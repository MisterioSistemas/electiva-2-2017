



$(function(){
    var token =  $('#csrf-token').val();
    $.ajaxSetup({
         headers: { 'X-CSRF-Token' : token }
});

    $('#insertar').click(function(event) {
        event.preventDefault();
        debugger;
       

        $.ajax({
            url: $('#create').attr('action'),
            method: $('#create').attr('method'),
            data: $('#create').serialize(),
            dataType: 'JSON',
            success: function(response){
           debugger;
                $(response).each(function (key, value) {
                     $( "#NotasGeneral" ).append( "<div id='section-" + value.id + "' class='sections level3'> <h3> " + value.titulo + "</h3><p>" + value.nota + "</p></div>" );
                });
                 
            },
            error: function(){
                console.log('Error');
            }
        });
    });
     
}); 

$("#search").keyup(function (event) {
        debugger;
        var value = $(this).val();
        event.preventDefault();
        debugger;
        $.ajax({
            url: $('#searchs').attr('action'),
            method: $('#searchs').attr('method'),
            data: {value : value},
            dataType: 'JSON',
            success: function(response){

            $('#NotasGeneral').empty();

            
            if(response==""){
                $('#NotasGeneral').empty();

            }else{
                    $(response).each(function (key, values) {
        
                    $( "#NotasGeneral" ).append( "<div id='section-" + values.id + "' class='sections level3'> <h3> " + values.titulo + "</h3><p>" + values.nota + "</p></div>" );
                    });
               }  
            },
            error: function(){
                console.log('Error');
            }
        });



    });