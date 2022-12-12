<?php
    include "Conexion.php";
    class Persona extends Conexion {
        public function agregarPersona($datos){
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_persona (paterno, materno, nombre, telefono)
                    VALUES(?, ?, ?, ?)";
            
            $query = $conexion->prepare($sql);
            $query->bind_param('ssss', $datos['paterno'],
                                        $datos['materno'],
                                        $datos['nombre'],
                                        $datos['telefono']);
            return $query->execute();
        }
        
        public function eliminarPersona($idPersona){
            $conexion = parent::conectar();//Llamar un metodo por herencia
            $sql = "DELETE FROM t_persona WHERE id_persona = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idPersona);
            return $query->execute();
        }
    }
?>