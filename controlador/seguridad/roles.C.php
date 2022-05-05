<?php
    //Consumir modelo
    include '../../modelo/seguridad/roles.M.php';

    //Aqui se obtiene las variables de la vista.
    /*Validara que el json llegue ok */
    // $accion=$_POST['accion'];
    $accion = $_POST['accion'];
    if(isset($accion))
    {
        switch ($accion)
        { 
            case 'Registrar':
                $roles = new Roles();
                // $roles->setDescripcion($_POST['descripcion']);
                // $roles->setEstado($_POST['estado']);
                $roles->setDescripcion($_POST['descripcion']);
                $roles->setEstado($_POST['estado']=='Activo' ? 1 : 2);
                $roles->Registrar();

            break;
            case 'Modificar':
                $roles = new Roles();
                $roles->setId($_POST['id']);
                $roles->setDescripcion($_POST['descripcion']);
                $roles->setEstado($_POST['estado']);
                $roles->Modificar();

            break;
            case 'Eliminar':                
                $roles = new Roles();
                $roles->setId($_POST['id']);                   
                $roles->Eliminar();
            break;
            case 'Consultar':
                $roles = new Roles();
                $roles->setId($_POST['id']);    
                $roles->setDescripcion($_POST['descripcion']);             
                $roles->Consultar();
            break;           
        }
    }

?>