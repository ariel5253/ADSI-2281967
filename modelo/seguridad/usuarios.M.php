<?php
    class Usuarios
    {
        /*
        Atrinutos de la clase       
        */
        public $conn=null;

        private $id=null;        
        private $usuario = null;        
        private $contrasenia = null;
        private $estado=null;
        private $fechaCreacion=null;
        private $fechaModifcicion=null;
        private $idUsuarioCreacion=null;
        private $idUsuarioModificacion=null;

        //Conexion a la base de datos
        // public function __construct($con){
        //     $this->con = $con;
        // }
    
        //set id
        public function setId($id){$this->id = $id;}
        //get id
        public function getId(){return $this->id;}

        //set usuario
        public function setUsuario($usuario){$this->usuario = $usuario;}
        //get usuario
        public function getUsuario(){return $this->usuario;}       

        //set contraseña
        public function setContrasenia($contrasenia){$this->contrasenia = $contrasenia;}
        //get contraseña
        public function getContrasenia(){return $this->contrasenia;}  

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
            $sql = `
                    INSERT INTO usuarios (
                            usuario
                            ,contrasenia
                            ,estado
                            ,fecha_creacion
                            ,fecha_modificacion
                            ,id_usuario_creacion
                            ,id_usuario_modificacion)
                        VALUES (
                            '$this->getUsuario()'
                            ,'$this->getContrasenia()'
                            ,'NOW()'
                            ,'NOW()'
                            ,2
                            ,2                            
                        );
                            
                    `;
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
            unset($this->usuario);            
            unset($this->contrasenia);
            unset($this->estado);
            unset($this->fechaCreacion);
            unset($this->fechaModificacion);
            unset($this->idUsuarioCreacion);
            unset($this->idUsuarioModificacion);                        
        }

    }

?>