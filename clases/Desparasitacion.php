<?php
    include "Conexion.php"; 

    class Desparasitacion extends Conexion{
        public function opcionesMascotas(){
            $conexion = parent::conectar();
            $opciones = '';
            $sql = "SELECT * FROM t_mascota ORDER BY nombre";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_mascota'].'">'.strtoupper($ver['nombre']).'</option>';
            }
            return $opciones;
        }

        public function opcionesUsuario(){
            $conexion = parent::conectar();
            $opciones = '';
            $sql = "SELECT * FROM t_usuario ORDER BY email";
            $respuesta = mysqli_query($conexion, $sql);
            while ($ver = mysqli_fetch_array($respuesta)) {
                $opciones .= '<option value="'.$ver['id_usuario'].'">'.strtoupper($ver['email']).'</option>';
            }
            return $opciones;
        }

        public function agregarDesparasitacion($datos){
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_desparasitacion (id_mascota, id_usuario, fecha)
                    VALUES(?, ?, ?)";
            
            $query = $conexion->prepare($sql);
            $query->bind_param('iis', $datos['id_mascota'],
                                        $datos['id_usuario'],
                                        $datos['fecha']);
            return $query->execute();
        }

        public function eliminarDesparasitacion($idDesparasitacion){
            $conexion = parent::conectar();//Llamar un metodo por herencia
            $sql = "DELETE FROM t_desparasitacion WHERE id_desparasitacion = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idDesparasitacion);
            return $query->execute();
        }
    }
?>