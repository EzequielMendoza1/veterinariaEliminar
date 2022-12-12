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
            <br>
            <h2 class="text-center">DESPARASITACION DE MASCOTAS</h2>
            <a href="./agregarDesparasitacion.php" class="btn btn-outline-primary"><i class="fa-regular fa-square-plus"></i> Agregar Nueva Desparasitacion</a>
            <hr>
            <?php include "./tablaDesparasitacion.php"; ?>
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