<?php
    include "../../clases/Usuario.php";
    $Persona = new Usuario();

    $datos = array(
        "id_cat_rol" => $_POST['id_cat_rol'], //Arreglo asosiativo, o diccionario
        "id_persona" => $_POST['id_persona'],
        "email" => $_POST['email'],
        "password" => sha1($_POST['password'])
    );
    $respuesta = $Persona->agregarUsario($datos);
    if($respuesta){
?>
    <script>
        window.location.href = 'http://127.0.0.1/veterinaria/vistas/usuarios/usuarios.php';
    </script>
<?php
    } else {
        echo "No se puede agregar :(";
    }
?>