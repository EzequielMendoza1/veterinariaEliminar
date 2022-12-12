<?php
    include "../../clases/Mascota.php";
    $Mascota = new Mascota();

    $datos = array(
        "id_persona" => $_POST['id_persona'], //Arreglo asosiativo, o diccionario
        "tipo" => $_POST['tipo'],
        "nombre" => $_POST['nombre'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento'],
        "raza" => $_POST['raza'],
        "tamanio" => $_POST['tamanio'],
        "sexo" => $_POST['sexo'],
        "descripcion" => $_POST['descripcion']
    );
    $respuesta = $Mascota->agregarMascota($datos);
    if($respuesta){
?>
    <script>
        window.location.href = 'http://127.0.0.1/veterinaria/vistas/mascotas/mascotas.php';
    </script>
<?php
    } else {
        echo "No se puede agregar :(";
    }
?>