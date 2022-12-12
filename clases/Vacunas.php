<?php
    include "Conexion.php"; 

    class Vacunas extends Conexion{

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

        public function agregarVacunas($datos){
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_vacunas (id_mascota, id_usuario, nombre, fecha)
                    VALUES(?, ?, ?, ?)";
            
            $query = $conexion->prepare($sql);
            $query->bind_param('iiss', $datos['id_mascota'],
                                        $datos['id_usuario'],
                                        $datos['nombre'],
                                        $datos['fecha']);
            return $query->execute();
        }

        public function eliminarVacuna($idVacuna){
            $conexion = parent::conectar();//Llamar un metodo por herencia
            $sql = "DELETE FROM t_vacunas WHERE id_vacuna = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idVacuna);
            return $query->execute();
        }
    }
?>