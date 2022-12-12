<?php
    include "../../clases/Persona.php";
    $Persona = new Persona();

    $datos = array(
        "paterno" => $_POST['paterno'], //Arreglo asosiativo, o diccionario
        "materno" => $_POST['materno'],
        "nombre" => $_POST['nombre'],
        "telefono" => $_POST['telefono']
    );
    $respuesta = $Persona->agregarPersona($datos);
    if($respuesta){
?>
    <script>
        window.location.href = 'http://127.0.0.1/veterinaria/vistas/personas/personas.php';
    </script>
<?php
    } else {
        echo "No se puede agregar :(";
    }
?>