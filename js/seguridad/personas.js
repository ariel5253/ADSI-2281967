function Enviar(accion,id){

    
    if(id==null && $('#id').val()!="")
    {
        id = $('#id').val();
    }
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
                    $("#btnConsultar").trigger("click");                 
                }

                //Respuesta muchos
                if(respuesta['accion']=='Consultar'  && respuesta['id']==null){                    
                    $('#tbSalidaDatos').html(respuesta['tablaRegistro']);
                }

                //Respuesta un registro
                if(respuesta['accion']=='Consultar'  && respuesta['id']>0){                    
                    $('#id').val(respuesta['id']);
                    $('#tipoDocumento').val(respuesta['tipoDocumento']);
                    $('#documento').val(respuesta['documento']);
                    $('#primerNombre').val(respuesta['primerNombre']);
                    $('#segundoNombre').val(respuesta['segundoNombre']);
                    $('#primerApellido').val(respuesta['primerApellido']);
                    $('#segundoApellido').val(respuesta['segundoApellido']);                    
                    $('#celular').val(respuesta['celular']);
                    $('#correo').val(respuesta['correo']);
                    $('#direccion').val(respuesta['direccion']);
                    $('#estado').val(respuesta['estado']);
                }

                //Respuesta modificar
                if(respuesta['accion']=='Modificar'){
                    alert(respuesta['respuesta']);
                    Limpiar();
                    $("#btnConsultar").trigger("click");
                }
                
                //Respuesta eliminar
                if(respuesta['accion']=='Eliminar'){
                    alert(respuesta['respuesta']);
                    Limpiar();
                    $("#btnConsultar").trigger("click");
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