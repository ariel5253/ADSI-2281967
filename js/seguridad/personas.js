function Enviar(accion,id){
    
    var parametros = {
        "id" : id,
        "tipoDocumento":$('#tipoDocumento').val(),
        "documento":$('#documento').val(),
        "primerNombre":$('#primerNombre').val(),
        "primerNombre":$('#primerNombre').val(),
        "segundoNombre":$('#segundoNombre').val(),
        "primerApellido":$('#primerApellido').val(),
        "segundoApellido":$('#segundoApellido').val(),
        "celular":$('#celular').val(),
        "correo":$('#correo').val(),
        "direccion":$('#direccion').val(),
        "estado":$('#estado').val(),
        "accion" : accion
    }; 

    $.ajax({
            data: parametros, //datos que se van a enviar al ajax
            url: '../../controlador/seguridad/personas.C.php', //archivo php que recibe los datos
            type: 'post', //método para enviar los datos
            dataType: 'json',//Recibe el array desde php
           
            success:  function (respuesta) { //procesa y devuelve la respuesta
                // console.log(respuesta); 
                
            //Reiniciar datatable
            // $("#tableDatos").dataTable().fnDestroy();

                //Respueta adicionar
                if(respuesta['accion']=='Registrar'){
                    alert(respuesta['respuesta']);
                    Limpiar();                    
                }
                
                //Respuesta muchos registros
                if(respuesta['accion']=='CONSULTAR' && respuesta['numeroRegistros']>1){
                    $("#resultado").html(respuesta['tablaRegistro']);
                    
                    //Código para DataTable

                    //Para inicializar datatable de la manera más simple

                    $(document).ready(function() {    
                        $('#tableDatos').DataTable({
                        //para cambiar el lenguaje a español
                            "language": {
                                    "lengthMenu": "Mostrar _MENU_ registros",
                                    "zeroRecords": "No se encontraron resultados",
                                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                                    "sSearch": "Buscar:",
                                    "oPaginate": {
                                    "sFirst": "Primero",
                                    "sLast":"Último",
                                    "sNext":"Siguiente",
                                    "sPrevious": "Anterior"
                                    },
                                    "sProcessing":"Procesando...",
                                },
                                "paging":   false
                        });     
                    });                    
                }

                //Respuesta un registro
                if(respuesta['accion']=='CONSULTAR'){
                    $('#hidIdPersona').val(respuesta['id']);           
                    $('#txtNombre').focus();
                }

                //Respuesta modificar
                if(respuesta['accion']=='MODIFICAR'){
                    alert(respuesta['respuesta']);
                    Limpiar();
                    $("#btnBuscar").trigger("click");
                }
                
                //Respuesta eliminar
                if(respuesta['accion']=='ELIMINAR'){
                    alert(respuesta['respuesta']);
                    Limpiar();
                    $("#btnBuscar").trigger("click");
                }
            }
    });
}
function Limpiar(){
    $('#id').val("");
    $('#tipoDocumento').val("");
    $('#documento').val("");
    $('#primerNombre').val("");
    $('#primerNombre').val("");
    $('#segundoNombre').val("");
    $('#primerApellido').val("");
    $('#segundoApellido').val("");
    $('#celular').val("");
    $('#correo').val("");
    $('#direccion').val("");
    $('#estado').val("")
}