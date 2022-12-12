
<?php session_start();
    if(isset($_SESSION['usuario'])){
    
    include '../layouts/header.php';
    include '../layouts/navbar.php';
    include '../../clases/Vacunas.php';
    $Vacunas = new Vacunas();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <hr>
            <h2 class="text-center">Agregar Nueva Vacuna</h2>
            <a href="./vacunas.php" class="btn btn-outline-danger"><i class="fa-solid fa-chevron-left"></i> Regresar</a>
            <hr>
            <form action="../../procesos/vacunas/agregarNuevaVacuna.php" method="post">
                <div class="row">

                    <div class="col">
                        <label for="id_mascota">Mascota</label>
                        <select name="id_mascota" id="id_mascota" class="form-select" required>
                            <?php echo $Vacunas->opcionesMascotas(); ?>
                        </select>
                    </div>

                </div>

                <br>

                <div class="row">

                    <div class="col">
                        <label for="nombre">Nombre Vacunas</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>


                    <div class="col">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" required>
                    </div>
                </div>


                <button class="btn btn-outline-primary mt-3">Agregar</button>
            </form>
        </div>
    </div>
</div>

<?php
    include '../layouts/footer.php';
?>

    <script>
        $(document).ready(function(){
            $('#id_mascota').select2();
        });
    </script>
        
    <script>
        $(document).ready(function(){
            $('#id_usuario').select2();
        });
    </script>
<?php
    }else{
?>
    <script>
        window.location.href = 'http://127.0.0.1/veterinaria/procesos/usuario/agregarNuevoUsuario.php';
    </script>
<?php
    }
?>