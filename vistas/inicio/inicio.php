
<?php session_start();
    if(isset($_SESSION['usuario'])){
    include '../layouts/header.php';
    include '../layouts/navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Inicio de proyecto</h2>
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