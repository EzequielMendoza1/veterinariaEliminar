<?php
    class Conexion {

        public $servidor = 'localhost';
        public $usuario = 'ezequielmendoza';
        public $password = 'ezequielroot';
        public $bd = 'veterinaria';
        public $puerto = 3306;

        public function conectar(){
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->bd,
                $this->puerto
            );
        }
    }
?>