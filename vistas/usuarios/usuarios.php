
<?php session_start();
    if(isset($_SESSION['usuario'])){
    include '../../clases/Conexion.php';
    include '../layouts/header.php';
    include '../layouts/navbar.php';
    $con = new Conexion();
    $conexion = $con->conectar();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <hr>
            <h2 class="text-center">Usuarios de la veterinaria</h2>
            <a href="./agregarUsuario.php" class="btn btn-outline-primary"><i class="fa-solid fa-user-plus"></i> Agregar Nuevo Usuario</a>
            <hr>
            <?php include "./tablaUsuarios.php"; ?>
        </div>
    </div>
</div>
<?php include '../layouts/footer.php'; ?>

<?php
    }else{
?>
    <script>
        window.location.href = 'http://127.0.0.1/veterinaria/index.php';
    </script>
<?php
    }
?>