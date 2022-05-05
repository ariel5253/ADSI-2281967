<?php
    //Consumir modelo
    include '../../modelo/seguridad/personas.M.php';

    //Aqui se obtiene las variables de la vista.
    /*Validara que el json llegue ok */
    // $accion=$_POST['accion'];
    $accion = 'Registrar';

    if(isset($accion))
    {
        switch ($accion)
        { 
            case 'Registrar':
                $personas = new Personas();
                // $personas->setTipoDocumento($_POST['cmbTipoDocumento']);
                // $personas->setDocumento($_POST['documento']);
                // $personas->setPrimerNombre($_POST['primerNombre']);
                // $personas->setSegundoNombre($_POST['segundoNombre']);
                // $personas->setPrimerApellido($_POST['primerApellido']);
                // $personas->setSegundoApellido($_POST['segundoApellido']);
                // $personas->setCelular($_POST['celular']);
                // $personas->setCorreo($_POST['correo']);
                // $personas->setDireccion($_POST['direccion']);
                // $personas->Registrar();
                $personas->Prueba();

            break;
            case 'Modificar':
                $personas = new Personas();
                $personas->setId($_POST['id']);
                $personas->setTipoDocumento($_POST['cmbTipoDocumento']);
                $personas->setDocumento($_POST['documento']);
                $personas->setPrimerNombre($_POST['primerNombre']);
                $personas->setSegundoNombre($_POST['segundoNombre']);
                $personas->setPrimerApellido($_POST['primerApellido']);
                $personas->setSegundoApellido($_POST['segundoApellido']);
                $personas->setCelular($_POST['celular']);
                $personas->setCorreo($_POST['correo']);
                $personas->setDireccion($_POST['direccion']);
                $personas->Modificar();

            break;
            case 'Eliminar':                
                $personas = new Personas();
                $personas->setId($_POST['id']);                   
                $personas->Eliminar();
            break;
            case 'Consultar':
                $personas = new Personas();
                $personas->setId($_POST['id']);                   
                $personas->Consultar();
            break;
        }
    }

?>