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
                    $personas->setId((intval($_POST['id']))==0? null:intval($_POST['id']));                   
                    $personas->Consultar();                   

                    $numeroRegistros = $personas->conn->ObtenerNumeroRegistros();
                    $respuesta['cantidadRegistro']=$numeroRegistros;
                    $respuesta['id']=$personas->getId();
                    if($numeroRegistros==1)
                    {
                        if ($rowBuscar = $personas->conn->ObtenerObjeto()){
                            $respuesta['id'] = $rowBuscar->id;
                            $respuesta['tipoDocumento'] = $rowBuscar->tipo_documento;
                            $respuesta['documento'] = $rowBuscar->documento;
                            $respuesta['primerNombre'] = $rowBuscar->primer_nombre;
                            $respuesta['segundoNombre'] = $rowBuscar->segundo_nombre;
                            $respuesta['primerApellido'] = $rowBuscar->primer_apellido;
                            $respuesta['segundoApellido'] = $rowBuscar->segundo_apellido;
                            $respuesta['celular'] = $rowBuscar->celular;
                            $respuesta['correo'] = $rowBuscar->correo;                           
                            $respuesta['direccion'] = $rowBuscar->direccion;
                            $respuesta['estado'] = ($rowBuscar->estado == 1 ? 'Activo':'Inactivo');
                            $respuesta['eliminar'] = "<input type='button' name='eliminar' class='eliminar' value='Eliminar' onclick='Enviar(\"ELIMINAR\",".$rowBuscar->id.")'>";
                        }
                    }else{
                        if(isset($personas)){
                            $retorno="";
                            foreach($personas->conn->ObtenerRegistros() AS $rowConsulta){
                                $retorno .= "<tr>                                          
                                            <td><label>".$rowConsulta[0]."</label></td>            
                                            <td><label>".$rowConsulta[1]."</label></td>                                           
                                            <td><label>".$rowConsulta[2]."</label></td>  
                                            <td><label>".$rowConsulta[3]."</label></td> 
                                            <td><label>".$rowConsulta[4]."</label></td>                                        
                                            <td><label>".$rowConsulta[5]."</label></td>                                                                                               
                                            <td><label>".$rowConsulta[6]."</label></td>
                                            <td><label>".$rowConsulta[7]."</label></td>
                                            <td><label>".($rowConsulta[8] == 1 ? 'Activo' : 'Inactivo')."</label></td>
                                            <td><button type='button' onclick='Enviar(\"Consultar\",".$rowConsulta[0].")'>Editar</button></td>
                                            <td><button type='button' onclick='Enviar(\"Eliminar\",".$rowConsulta[0].")'>Eliminar</button></td>
                                        </tr>";
                            }                                                             
                            $respuesta['tablaRegistro']=$retorno;
                        }else{                                         
                            $respuesta['tablaRegistro']='No existen datos!!!';
                        }

                    }

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