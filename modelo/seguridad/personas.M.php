<?php
    class Personas
    {
        /*
        Atrinutos de la clase       
        */
        public $conn=null;

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
        private $estado=null;
        private $fechaCreacion=null;
        private $fechaModifcicion=null;
        private $idUsuarioCreacion=null;
        private $idUsuarioModificacion=null;

        //Conexion a la base de datos
        public function __construct($con){
            $this->con = $con;
        }
    
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
            echo 'Aqui va la sentencia sql de adicionar con los datos ';
        }

        //Modificar Registros
        public function Modificar()
        {
            
        }

        //Eliminar Registros
        public function Eliminar()
        {
            
        }

        //Consultar Registros
        public function Consultar()
        {
            
        }

        //WhereAnd
        public function WhereAnd()
        {            
            return $whereAnd ="";
        }

        //Destruye los atributos
        public function __destruct(){
            unset($this->conn);
            unset($this->id);
            unset($this->tipoDocumento);
            unset($this->documento);
            unset($this->primerNombre);
            unset($this->segundoNombre);
            unset($this->primerApellido);
            unset($this->segundoApellido);
            unset($this->celular);
            unset($this->correo);
            unset($this->telefono);
            unset($this->estado);
            unset($this->fechaCreacion);
            unset($this->fechaModificacion);
            unset($this->idUsuarioCreacion);
            unset($this->idUsuarioModificacion);                        
        }

    }

?>