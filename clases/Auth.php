<?php
    include "Conexion.php";

    class Auth extends Conexion {
        public function logear($email, $password){
            $conexion = parent::conectar();
            $sql = "SELECT * FROM t_usuario 
                    WHERE email = '$email' AND password = '$password'";
        
            $respuesta = mysqli_query($conexion, $sql);
            if (mysqli_num_rows($respuesta) > 0) {
                $_SESSION['idUsuario'] = $this->crearSesionId($email, $password);
                $_SESSION['usuario'] = $email;
                return 1;
            }else {
                return 0;
            }

        }

        public function crearSesionId($email, $password){
            $conexion = parent::conectar();
            $sql = "SELECT id_usuario 
                FROM t_usuario 
                WHERE email = '$email' AND password = '$password'";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_array($respuesta)['id_usuario'];
        }

        public function opcionesRoles(){
            $conexion = parent::conectar();
            $opciones = '';
            $sql = "SELECT * FROM t_cat_rol ORDER BY nombre";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_cat_rol'].'">'.strtoupper($ver['nombre']).'</option>';
            }
            return $opciones;
        }

        public function opcionesPersonas(){
            $conexion = parent::conectar();
            $opciones = '';
            $sql = "SELECT CONCAT(paterno,' ',materno,' ',nombre) as nombrePersona 
            FROM t_persona ORDER BY paterno";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_persona'].'">'.strtoupper($ver['nombrePersona']).'</option>';
            }
            return $opciones;
        }
    }
?>