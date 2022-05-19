<?php
    require '../../entorno/conexion.php';
    class Personas
    {
        /*
        Atrinutos de la clase       
        */

        // conexion
        public $conn=null;

        // atributos de la entidad
        private $id=null;        
        private $tipoDocumento = null;
        private $documento=null;
        private $primerNombre = null;
        private $segundoNombre = null;
        private $primerApellido = null;
        private $segundoApellido = null;
        private $celular = null;
        private $correo = null;
        private $direccion = null;

        // auditoria
        private $estado=null;
        private $fechaCreacion=null;
        private $fechaModifcicion=null;
        private $idUsuarioCreacion=null;
        private $idUsuarioModificacion=null;

        //Conexion a la base de datos
        public function __construct(){
            $this->conn = new Conexion();
        }
    
        /*
        Atributos de la entidad
        */

        //set id
        public function setId($id){$this->id = $id;}
        //get id
        public function getId(){return $this->id;}

        //set tipo documento
        public function setTipoDocumento($tipoDocumento){$this->tipoDocumento = $tipoDocumento;}
        //get tipo documento
        public function getTipoDocumento(){return $this->tipoDocumento;}

        //set documento
        public function setDocumento($documento){$this->documento = $documento;}
        //get documento
        public function getDocumento(){return $this->documento;}

        //set primer nombre
        public function setPrimerNombre($primerNombre){$this->primerNombre = $primerNombre;}
        //get primer nombre
        public function getPrimerNombre(){return $this->primerNombre;}

        //set segundo nombre
        public function setSegundoNombre($segundoNombre){$this->segundoNombre = $segundoNombre;}
        //get segundo nombre
        public function getSegundoNombre(){return $this->segundoNombre;}

        //set primer apellido
        public function setPrimerApellido($primerApellido){$this->primerApellido = $primerApellido;}
        //get primer apellido
        public function getPrimerApellido(){return $this->primerApellido;}

        //set segundo apellido
        public function setSegundoApellido($segundoApellido){$this->segundoApellido = $segundoApellido;}
        //get segundo apellido
        public function getSegundoApellido(){return $this->segundoApellido;}

        //set segundo celular
        public function setCelular($celular){$this->celular = $celular;}
        //get segundo celular
        public function getCelular(){return $this->celular;}

        //set segundo correo
        public function setCorreo($correo){$this->correo = $correo;}
        //get segundo correo
        public function getCorreo(){return $this->correo;}

        //set segundo direccion
        public function setDireccion($direccion){$this->direccion = $direccion;}
        //get segundo direccion
        public function getDireccion(){return $this->direccion;}        


        /*
        Atributos de auditoria
        */

        //set estado
        public function setEstado($estado){$this->estado = $estado;}
        //get estado
        public function getEstado(){return $this->estado;}

        //set fechaCreacion
        public function setFechaCreacion($fechaCreacion){$this->fechaCreacion = $fechaCreacion;}
        //get fechaCreacion
        public function getFechaCreacion(){return $this->fechaCreacion;}

        //set fechaModificacion
        public function setFechaModificacion($fechaModificacion){$this->fechaModificacion = $fechaModificacion;}
        //get fechaModificacion
        public function getFechaModificacion(){return $this->fechaModificacion;}

        //set idUsuarioCreacion
        public function setIdUsuarioCreacion($idUsuarioCreacion){$this->idUsuarioCreacion = $idUsuarioCreacion;}
        //get idUsuarioCreacion
        public function getIdUsuarioCreacion(){return $this->idUsuarioCreacion;}

        //set idUsuarioModificacion
        public function setIdUsuarioModificacion($idUsuarioModificacion){$this->idUsuarioModificacion = $idUsuarioModificacion;}
        //get idUsuarioModificacion
        public function getIdUsuarioModificacion(){return $this->idUsuarioModificacion;}

        //Crear Registros
        public function Registrar()
        {           
           $sql = "
                    INSERT INTO personas (                        
                        tipo_documento
                        ,documento
                        ,primer_nombre
                        ,segundo_nombre
                        ,primer_apellido
                        ,segundo_apellido
                        ,celular
                        ,correo
                        ,direccion
                        ,estado
                        ,fecha_creacion
                        ,fecha_modificacion
                        ,id_usuario_creacion
                        ,id_usuario_modificacion) 
                    VALUES (                        
                        '{$this->getTipoDocumento()}'
                        ,'{$this->getDocumento()}'
                        ,'{$this->getPrimerNombre()}'
                        ,'{$this->getSegundoNombre()}'
                        ,'{$this->getPrimerApellido()}'
                        ,'{$this->getSegundoApellido()}'
                        ,'{$this->getCelular()}'
                        ,'{$this->getCorreo()}'
                        ,'{$this->getDireccion()}'
                        , {$this->getEstado()}
                        , NOW()
                        , NOW()
                        ,2
                        ,2
                                                
                    );
                            
                    ";           
            $this->conn->Preparar($sql);    
            $this->conn->Ejecutar();
        }

        //Modificar Registros
        public function Modificar()
        {
            $sql = "UPDATE personas 
                    SET
                        tipo_documento = '$this->tipoDocumento'
                        ,documento =  $this->documento
                        ,primer_nombre ='$this->primerNombre'
                        ,segundo_nombre = '$this->segundoNombre'
                        ,primer_apellido = '$this->primerApellido'
                        ,segundo_apellido = '$this->segundoApellido'
                        ,celular = '$this->celular'
                        ,correo = '$this->correo'
                        ,direccion = '$this->direccion'
                        ,estado = $this->estado                        
                        ,fecha_modificacion = NOW()                      
                        ,id_usuario_modificacion = 2
                    WHERE  id = $this->id;                           
                    ";           
            $this->conn->Preparar($sql);    
            $this->conn->Ejecutar();
        }

        //Eliminar Registros
        public function Eliminar()
        {
            $sql = "DELETE FROM personas WHERE id = {$this->getId()};                           
                    ";           
            $this->conn->Preparar($sql);    
            $this->conn->Ejecutar();   
        }

        //Consultar Registros
        public function Consultar()
        {
            if($this->id != null)
            {
                $whereAnd = " WHERE id = ".$this->getId();
            }else{
                $whereAnd="";
            }
            

            $sql = "SELECT  * FROM personas $whereAnd;";           
            $this->conn->Preparar($sql);    
            $this->conn->Ejecutar();
        }      

        //WhereAnd
        public function WhereAnd()
        {            
            if($this->id != null)
            {
                $whereAnd = " WHERE id = ".$this->getId();
            }
            return $whereAnd = "";
        }

        //Destruye los atributos
        public function __destruct(){
            unset($this->conn);
            unset($this->id);
            unset($this->documento);
            unset($this->setDocumento);
            unset($this->primerNombre);
            unset($this->segundoNombre);
            unset($this->primerApellido);
            unset($this->segundoApellido);
            unset($this->celular);
            unset($this->direccion);
            unset($this->correo);
            unset($this->estado);
            unset($this->fechaCreacion);
            unset($this->fechaModificacion);
            unset($this->idUsuarioCreacion);
            unset($this->idUsuarioModificacion);                        
        }

    }

?>