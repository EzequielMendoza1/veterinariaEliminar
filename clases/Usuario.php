<?php
    include "Conexion.php"; 

    class Usuario extends Conexion{
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
            $sql = "SELECT CONCAT(paterno,' ',materno,' ',nombre) as nombrePersona, id_persona 
            FROM t_persona ORDER BY paterno";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_persona'].'">'.strtoupper($ver['nombrePersona']).'</option>';
            }
            return $opciones;
        }
  
        public function agregarUsario($datos){
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_usuario (id_cat_rol, id_persona, email, password) 
                    VALUES(?, ?, ?, ?)";
            
            $query = $conexion->prepare($sql);
            $query->bind_param('iiss', $datos['id_cat_rol'],
                                        $datos['id_persona'],
                                        $datos['email'],
                                        $datos['password']);
            return $query->execute();
        }

        public function eliminarUsuario($idUsuario){
            $conexion = parent::conectar();//Llamar un metodo por herencia
            $sql = "DELETE FROM t_usuario WHERE id_usuario = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idUsuario);
            return $query->execute();
        }
    }
?>