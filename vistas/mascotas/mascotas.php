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
            <h2 class="text-center">Mascotas Veterinaria</h2>
            <a href="./agregarMascota.php" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Agregar Nuevo Mascota</a>
            <hr>
            <?php include "./tablaMacotas.php"; ?>
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