<?php
    class Contionentes
    {
        /*
        Atrinutos de la clase       
        */
        public $con;
        private $id=null;
        private $descripcion=null;
        private $estado=null;
        private $fechaCreacion=null;
        private $fechaModifcicion=null;
        private $idUsuarioCreacion=null;
        private $idUsuarioModificacion=null;

        public function __construct($con){
            $this->con = $con;
        }

        //set id
        public function setId($id){$this->id = $id;}
        //get id
        public function getId(){return $this->id;}

        //set descripcion
        public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
        //get descripcion
        public function getDescripcion(){return $this->descripcion;}

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
            unset($this->id);
            unset($this->descripcion);
            unset($this->estado);
            unset($this->fechaCreacion);
            unset($this->fechaModificacion);
            unset($this->idUsuarioCreacion);
            unset($this->idUsuarioModificacion);                        
        }

    }

?>