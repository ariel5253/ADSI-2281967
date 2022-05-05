<?php
    //Consumir modelo
    include '../../modelo/seguridad/usuarios.M.php';

    //Aqui se obtiene las variables de la vista.
    /*Validara que el json llegue ok */
    // $accion=$_POST['accion'];
    $accion = 'Prueba';

    if(isset($accion))
    {
        switch ($accion)
        { 
            case 'Registrar':
                $usuarios = new Usuarios();
                $usuarios->setUsuario($_POST['usuario']);
                $usuarios->setContrasenia($_POST['contrasenia']);
                $usuarios->setEstado($_POST['estado']);
                $usuarios->Registrar();

            break;
            case 'Modificar':
                $usuarios = new Usuarios();
                $usuarios->setId($_POST['id']);
                $usuarios->setUsuario($_POST['usuario']);
                $usuarios->setContrasenia($_POST['contrasenia']);
                $usuarios->setEstado($_POST['estado']);
                $usuarios->Modificar();

            break;
            case 'Eliminar':                
                $usuarios = new Usuarios();
                $usuarios->setId($_POST['id']);                   
                $usuarios->Eliminar();
            break;
            case 'Consultar':
                $usuarios = new Usuarios();
                $usuarios->setId($_POST['id']);     
                $usuarios->setUsuario($_POST['usuario']);            
                $usuarios->Consultar();
            break;           
        }
    }

?>