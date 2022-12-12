<?php session_start();
    if(isset($_SESSION['usuario'])){
    include '../layouts/header.php';
    include '../layouts/navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
        <hr>
        <h2 class="text-center">Crear Nueva Persona</h2>
        <a href="./personas.php" class="btn btn-outline-success"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
        <hr>
        <br><br>
        <form action="../../procesos/persona/agregarNuevaPersona.php" method="post">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" id="paterno" class="form-control" name="paterno" required>

            <label for="materno">Apellido Materno</label>
            <input type="text" id="materno" class="form-control" name="materno" required>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre" required>

            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" class="form-control" name="telefono" required>

            <button class="btn btn-outline-primary mt-3">Guardar</button>
        </form>
            
        </div>
    </div>
</div>
<?php include '../layouts/footer.php'; ?>

<?php
    }else{
?>
    <script>
        window.location.href = 'http://127.0.0.1/veterinaria/procesos/persona/agregarNuevaPersona.php';
    </script>
<?php
    }
?>