<?php 
    include "../../clases/Mascota.php";
    $idMascota = $_GET['id'];
    $Mascota = new Mascota();
    if($Mascota->eliminarMascota($idMascota)){
?>

    <script>
        window.location.href = 'http://127.0.0.1/veterinaria/vistas/mascotas/mascotas.php';
    </script>
<?php
    } else {
        echo "No se puede eliminar";
    }
?>