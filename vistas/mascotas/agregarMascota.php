<?php session_start();
    if(isset($_SESSION['usuario'])){
    
    include '../layouts/header.php';
    include '../layouts/navbar.php';
    include '../../clases/Mascota.php';
    $Mascota = new Mascota();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <hr>
            <h2 class="text-center">Agregar Nueva Mascota</h2>
            <a href="./mascotas.php" class="btn btn-outline-danger"><i class="fa-solid fa-chevron-left"></i> Regresar</a>
            <hr>
            <form action="../../procesos/mascotas/agregarNuevaMascota.php" method="post">
                <div class="row">

                    <div class="col">
                        <label for="id_persona">Persona</label>
                        <select name="id_persona" id="id_persona" class="form-select" required>
                        <?php echo $Mascota->opcionesPersonas(); ?>
                        </select>
                    </div>

                    <div class="col">
                        <label for="tipo">Tipo</label>
                        <input type="text" name="tipo" id="tipo" class="form-control" required>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <label for="nombre">Nombre de la Mascota</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <label for="raza">Raza de la mascota</label>
                        <input type="text" name="raza" id="raza" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="tamanio">Tamaño</label>
                        <input type="text" name="tamanio" id="tamanio" class="form-control" required>
                    </div>
                </div>

                <div class="row">

                    <div class="col">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo" class="form-select" required>
                            <option value="">Elige uno...</option>
                            <option value="macho">Macho</option>
                            <option value="hembra">Hembra</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" required>
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
            $('#id_cat_rol').select2();
        });
    </script>
        
    <script>
        $(document).ready(function(){
            $('#id_persona').select2();
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