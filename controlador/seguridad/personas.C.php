<?php
    //Consumir modelo
    include '../../modelo/seguridad/personas.M.php';

    //Aqui se obtiene las variables de la vista.
    /*Validara que el json llegue ok */
    // $accion=$_POST['accion'];
    $accion = $_POST['accion'];
    $respuesta =  array();

    if(isset($accion))
    {
        switch ($accion)
        { 
            case 'Registrar':                
                try {
                    $personas = new Personas();
                    $personas->setTipoDocumento($_POST['tipoDocumento']);
                    $personas->setDocumento($_POST['documento']);
                    $personas->setPrimerNombre($_POST['primerNombre']);
                    $personas->setSegundoNombre($_POST['segundoNombre']);
                    $personas->setPrimerApellido($_POST['primerApellido']);
                    $personas->setSegundoApellido($_POST['segundoApellido']);
                    $personas->setCelular($_POST['celular']);
                    $personas->setCorreo($_POST['correo']);
                    $personas->setDireccion($_POST['direccion']);
                    $personas->setEstado($_POST['estado'] == 'Activo'?1:0);
                    $personas->Registrar();
                    $respuesta['respuesta']="La información se agregó correctamente";
                } catch (Exception $e) {
                    $respuesta['respuesta']="No fué posible agregar el registro.";
                }
                $respuesta['accion']=$_POST['accion'];
                echo json_encode($respuesta);
            break;
            case 'Modificar':
                try {
                    $personas = new Personas();
                    $personas->setId($_POST['id']);
                    $personas->setTipoDocumento($_POST['tipoDocumento']);
                    $personas->setDocumento($_POST['documento']);
                    $personas->setPrimerNombre($_POST['primerNombre']);
                    $personas->setSegundoNombre($_POST['segundoNombre']);
                    $personas->setPrimerApellido($_POST['primerApellido']);
                    $personas->setSegundoApellido($_POST['segundoApellido']);
                    $personas->setCelular($_POST['celular']);
                    $personas->setCorreo($_POST['correo']);
                    $personas->setDireccion($_POST['direccion']);
                    $personas->setEstado($_POST['estado'] == 'Activo'?1:0);
                    $personas->Modificar();
                    $respuesta['respuesta']="La información se modificó correctamente";
                } catch (Exception $e) {
                    $respuesta['respuesta']="No fué posible modificar el registro.";
                }
                $respuesta['accion']=$_POST['accion'];
                echo json_encode($respuesta);

            break;
            case 'Eliminar':                
                try {
                    $personas = new Personas();
                    $personas->setId($_POST['id']);                   
                    $personas->Eliminar();
                    $respuesta['respuesta']="La información se eliminó correctamente";
                } catch (Exception $e) {
                    $respuesta['respuesta']="No fué posible eliminar el registro.";
                }
                $respuesta['accion']=$_POST['accion'];
                echo json_encode($respuesta);
            break;
            case 'Consultar':
                try {
                    $personas = new Personas();
                    $personas->setId($_POST['id']);                   
                    $personas->Consultar();
                    $respuesta['respuesta']="La información se consultó correctamente";
                } catch (Exception $e) {
                    $respuesta['respuesta']="No fué posible consultar la información.";
                }
                $respuesta['accion']=$_POST['accion'];
                echo json_encode($respuesta);
            break;
        }
    }

?>