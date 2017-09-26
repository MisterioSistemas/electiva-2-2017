$(document).ready(function () {
    $('#prueba').on('keyup', function () {
//        console.log($('#prueba').val());
        $.ajax({// hace el Ajax
            method: 'GET',
            url: '/buscar/' + $('#prueba').val(),
            success: function (data) {
//                $('.notas').html()(data);
//                console.log("pasoo");
                console.log(data);
                $(".notas").empty();
                for (var i in data) {
                    var obj = data[i];

		  var myvar = '<div class="col-lg-4 col-md-6 mb-4">'+
'                            <div class="card h-100">'+
'                                <div class="card-body">'+
'                                    <h4 class="card-title">'+    
'                                        <a href ={{"#flipFlop".$objNota["id"]}}    data-toggle="modal"  data-target='+'"#flipFlop'+ obj.id +  '"'+
'                                           >' + obj.titulo + '</a>'+
'                                    </h4>'+
'                                    <p class="card-text">' + obj.descripcion + '</p>'+
'                                </div>'+
'                                <div class="card-footer">'+
'                                    <a href="#"  data-toggle="modal"  data-target='+'"#flipFlop'+ obj.id +  '"'+' >editar </a>'+
'                                    <a  href="#" id="borrar" onclick=\'borrar('+obj.id+')\' >Borrar</a>'+
'                                </div>'+
'                            </div>'+
'                        </div>'+

'<div class="modal fade" id='+'"flipFlop'+ obj.id +  '"'+' tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">' +
'                  <div class="modal-dialog" role="document">                                                                                                                 ' +
'                      <div class="modal-content">                                                                                                                            ' +
'                          <div class="modal-header">                                                                                                                         ' +
'                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                                                   ' +
'                                  <span aria-hidden="true">&times;</span>                                                                                                    ' +
'                              </button>                                                                                                                                      ' +
'                              <h4  contenteditable="true" class="modal-title" id='+'"titulo'+ obj.id +  '"'+' >'+obj.titulo+'</h4>                                   ' +
'                          </div>                                                                                                                                             ' +
'                          <textarea id='+'"descripcion'+ obj.id +  '"'+'>'+obj.descripcion+'</textarea>                                                               ' +
'                          <div class="modal-footer">                                                                                                                         ' +
'                              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarNuevo">Cancelar</button>                                      ' +
'                              <button type="button" class="btn btn-success" data-dismiss="modal" id="FinalizarNuevo" onclick=\'editar('+ obj.id +')\'>Finalizar</button> ' +
'                          </div>                                                                                                                                             ' +
'                      </div>                                                                                                                                                 ' +
'                  </div>                                                                                                                                                     ' +
'              </div>                                                                                                                                                         ' +
'                                                                                                                                                                             ' ;
                    var resultado = '<div class="col-lg-4 col-md-6 mb-4">' +
                            '                            <div class="card h-100">' +
                            '                                <div class="card-body">' +
                            '                                    <h4 class="card-title">' +
                            '                                        <a href="#">' + obj.titulo + '</a>' +
                            '                                    </h4>' +
                            '                                    <p class="card-text">' + obj.descripcion + '</p>' +
                            '                                </div>' +
                            '                            </div>' +
                            '                        </div>';
                    $(".notas").append(myvar);

                }

            },
            error: function (xhr) {
                console.log(xhr);
                //Do Something to handle error
            }
        });
        $(".fa-shopping-cart").click(function () {
        });
    });
    //    
    //    
    //    
    //    



});
function borrar(valor) {
    console.log(valor);

    $.ajax({// hace el Ajax
        method: 'GET',
        url: '/borrar/' + valor,
        success: function (data) {
//                $('.notas').html()(data);
//                console.log("pasoo");
            console.log(data);
            $(".notas").empty();
            for (var i in data) {
                var obj = data[i];



                var myvar = '<div class="col-lg-4 col-md-6 mb-4">' +
                        '                            <div class="card h-100">' +
                        '                                <div class="card-body">' +
                        '                                    <h4 class="card-title">' +
                        '                                        <a href ={{"#flipFlop".$objNota["id"]}}    data-toggle="modal"  data-target=' + '"#flipFlop' + obj.id + '"' +
                        '                                           >' + obj.titulo + '</a>' +
                        '                                    </h4>' +
                        '                                    <p class="card-text">' + obj.descripcion + '</p>' +
                        '                                </div>' +
                        '                                <div class="card-footer">' +
                        '                                    <a href="#"  data-toggle="modal"  data-target=' + '"#flipFlop' + obj.id + '"' + ' >editar </a>' +
                        '                                    <a  href="#" id="borrar" onclick=\'borrar(' + obj.id + ')\' >Borrar</a>' +
                        '                                </div>' +
                        '                            </div>' +
                        '                        </div>' +
                        '<div class="modal fade" id=' + '"flipFlop' + obj.id + '"' + ' tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">' +
                        '                  <div class="modal-dialog" role="document">                                                                                                                 ' +
                        '                      <div class="modal-content">                                                                                                                            ' +
                        '                          <div class="modal-header">                                                                                                                         ' +
                        '                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                                                   ' +
                        '                                  <span aria-hidden="true">&times;</span>                                                                                                    ' +
                        '                              </button>                                                                                                                                      ' +
                        '                              <h4  contenteditable="true" class="modal-title" id=' + '"titulo' + obj.id + '"' + ' >' + obj.titulo + '</h4>                                   ' +
                        '                          </div>                                                                                                                                             ' +
                        '                          <textarea id=' + '"descripcion' + obj.id + '"' + '>' + obj.descripcion + '</textarea>                                                               ' +
                        '                          <div class="modal-footer">                                                                                                                         ' +
                        '                              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarNuevo">Cancelar</button>                                      ' +
                        '                              <button type="button" class="btn btn-success" data-dismiss="modal" id="FinalizarNuevo" onclick=\'editar(' + obj.id + ')\'>Finalizar</button> ' +
                        '                          </div>                                                                                                                                             ' +
                        '                      </div>                                                                                                                                                 ' +
                        '                  </div>                                                                                                                                                     ' +
                        '              </div>                                                                                                                                                         ' +
                        '                                                                                                                                                                             ';
                var resultado = '<div class="col-lg-4 col-md-6 mb-4">' +
                        '                            <div class="card h-100">' +
                        '                                <div class="card-body">' +
                        '                                    <h4 class="card-title">' +
                        '                                        <a href="#">' + obj.titulo + '</a>' +
                        '                                    </h4>' +
                        '                                    <p class="card-text">' + obj.descripcion + '</p>' +
                        '                                </div>' +
                        '                            </div>' +
                        '                        </div>';
                $(".notas").append(myvar);
//                    $(".notas").append(resultado);
//myvar
            }

        },
        error: function (xhr) {
            console.log(xhr);
            //Do Something to handle error
        }
    });

}
function editar(id) {
    var titulo = $("#titulo" + id);
    var desc = $("#descripcion" + id);
    console.log(desc.val());
    console.log(titulo.html());
    // hacer ajax  
    $.ajax({// hace el Ajax
        method: 'GET',
        url: '/agregar/' + titulo.html() + '/' + desc.val() + '/' + id,
        success: function (data) {
//                $('.notas').html()(data);
//                console.log("pasoo");
            console.log(data);
            $(".notas").empty();
            for (var i in data) {
                var obj = data[i];


                var myvar = '<div class="col-lg-4 col-md-6 mb-4">' +
                        '                            <div class="card h-100">' +
                        '                                <div class="card-body">' +
                        '                                    <h4 class="card-title">' +
                        '                                        <a href ={{"#flipFlop".$objNota["id"]}}    data-toggle="modal"  data-target=' + '"#flipFlop' + obj.id + '"' +
                        '                                           >' + obj.titulo + '</a>' +
                        '                                    </h4>' +
                        '                                    <p class="card-text">' + obj.descripcion + '</p>' +
                        '                                </div>' +
                        '                                <div class="card-footer">' +
                        '                                    <a href="#"  data-toggle="modal"  data-target=' + '"#flipFlop' + obj.id + '"' + ' >editar </a>' +
                        '                                    <a  href="#" id="borrar" onclick=\'borrar(' + obj.id + ')\' >Borrar</a>' +
                        '                                </div>' +
                        '                            </div>' +
                        '                        </div>' +
                        '<div class="modal fade" id=' + '"flipFlop' + obj.id + '"' + ' tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">' +
                        '                  <div class="modal-dialog" role="document">                                                                                                                 ' +
                        '                      <div class="modal-content">                                                                                                                            ' +
                        '                          <div class="modal-header">                                                                                                                         ' +
                        '                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                                                   ' +
                        '                                  <span aria-hidden="true">&times;</span>                                                                                                    ' +
                        '                              </button>                                                                                                                                      ' +
                        '                              <h4  contenteditable="true" class="modal-title" id=' + '"titulo' + obj.id + '"' + ' >' + obj.titulo + '</h4>                                   ' +
                        '                          </div>                                                                                                                                             ' +
                        '                          <textarea id=' + '"descripcion' + obj.id + '"' + '>' + obj.descripcion + '</textarea>                                                               ' +
                        '                          <div class="modal-footer">                                                                                                                         ' +
                        '                              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarNuevo">Cancelar</button>                                      ' +
                        '                              <button type="button" class="btn btn-success" data-dismiss="modal" id="FinalizarNuevo" onclick=\'editar(' + obj.id + ')\'>Finalizar</button> ' +
                        '                          </div>                                                                                                                                             ' +
                        '                      </div>                                                                                                                                                 ' +
                        '                  </div>                                                                                                                                                     ' +
                        '              </div>                                                                                                                                                         ' +
                        '                                                                                                                                                                             ';
                var resultado = '<div class="col-lg-4 col-md-6 mb-4">' +
                        '                            <div class="card h-100">' +
                        '                                <div class="card-body">' +
                        '                                    <h4 class="card-title">' +
                        '                                        <a href="#">' + obj.titulo + '</a>' +
                        '                                    </h4>' +
                        '                                    <p class="card-text">' + obj.descripcion + '</p>' +
                        '                                </div>' +
                        '                            </div>' +
                        '                        </div>';
                $(".notas").append(myvar);

            }

        },
        error: function (xhr) {
            console.log(xhr);
            //Do Something to handle error
        }
    });
}

function agregar() {
    var titulo = $("#titulonuevo");
    var desc = $("#descripcionnuevo");
    console.log(desc.val());
    console.log(titulo.html());
    // hacer ajax    
    $.ajax({// hace el Ajax
        method: 'GET',
        url: '/agregar/' + titulo.html() + '/' + desc.val(),
        success: function (data) {
//                $('.notas').html()(data);
//                console.log("pasoo");
            console.log(data);
            $(".notas").empty();
            for (var i in data) {
                var obj = data[i];


                var myvar = '<div class="col-lg-4 col-md-6 mb-4">' +
                        '                            <div class="card h-100">' +
                        '                                <div class="card-body">' +
                        '                                    <h4 class="card-title">' +
                        '                                        <a href ={{"#flipFlop".$objNota["id"]}}    data-toggle="modal"  data-target=' + '"#flipFlop' + obj.id + '"' +
                        '                                           >' + obj.titulo + '</a>' +
                        '                                    </h4>' +
                        '                                    <p class="card-text">' + obj.descripcion + '</p>' +
                        '                                </div>' +
                        '                                <div class="card-footer">' +
                        '                                    <a href="#"  data-toggle="modal"  data-target=' + '"#flipFlop' + obj.id + '"' + ' >editar </a>' +
                        '                                    <a  href="#" id="borrar" onclick=\'borrar(' + obj.id + ')\' >Borrar</a>' +
                        '                                </div>' +
                        '                            </div>' +
                        '                        </div>' +
                        '<div class="modal fade" id=' + '"flipFlop' + obj.id + '"' + ' tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">' +
                        '                  <div class="modal-dialog" role="document">                                                                                                                 ' +
                        '                      <div class="modal-content">                                                                                                                            ' +
                        '                          <div class="modal-header">                                                                                                                         ' +
                        '                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">                                                                   ' +
                        '                                  <span aria-hidden="true">&times;</span>                                                                                                    ' +
                        '                              </button>                                                                                                                                      ' +
                        '                              <h4  contenteditable="true" class="modal-title" id=' + '"titulo' + obj.id + '"' + ' >' + obj.titulo + '</h4>                                   ' +
                        '                          </div>                                                                                                                                             ' +
                        '                          <textarea id=' + '"descripcion' + obj.id + '"' + '>' + obj.descripcion + '</textarea>                                                               ' +
                        '                          <div class="modal-footer">                                                                                                                         ' +
                        '                              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelarNuevo">Cancelar</button>                                      ' +
                        '                              <button type="button" class="btn btn-success" data-dismiss="modal" id="FinalizarNuevo" onclick=\'editar(' + obj.id + ')\'>Finalizar</button> ' +
                        '                          </div>                                                                                                                                             ' +
                        '                      </div>                                                                                                                                                 ' +
                        '                  </div>                                                                                                                                                     ' +
                        '              </div>                                                                                                                                                         ' +
                        '                                                                                                                                                                             ';
                var resultado = '<div class="col-lg-4 col-md-6 mb-4">' +
                        '                            <div class="card h-100">' +
                        '                                <div class="card-body">' +
                        '                                    <h4 class="card-title">' +
                        '                                        <a href="#">' + obj.titulo + '</a>' +
                        '                                    </h4>' +
                        '                                    <p class="card-text">' + obj.descripcion + '</p>' +
                        '                                </div>' +
                        '                            </div>' +
                        '                        </div>';
                $(".notas").append(myvar);
            }

        },
        error: function (xhr) {
            console.log(xhr);
            //Do Something to handle error
        }
    });

}

//
//
////
//$(document).ready(function () {
//    $('#prueba').on('keyup', function () {
//        console.log($('#prueba').val());
//    });
////    $('#btnLlamada').on('click', function () {
////        $.ajax({
////            method: 'GET',
////            url: '/holaMundo',
////            success: function (data) {
////                $('#resultado').html(data);
////            }
////        })
////    });
//});
