
<?php session_start();
    if(isset($_SESSION['usuario'])){
    
    include '../layouts/header.php';
    include '../layouts/navbar.php';
    include '../../clases/Usuario.php';
    $Usuario = new Usuario();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <hr>
            <h2 class="text-center">Agregar Nuevo Usuario</h2>
            <a href="./usuarios.php" class="btn btn-outline-danger"><i class="fa-solid fa-chevron-left"></i> Regresar</a>
            <hr>
            <form action="../../procesos/usuario/agregarNuevoUsuario.php" method="post">
                <div class="row">

                    <div class="col">
                        <label for="id_cat_rol">Rol de usuario</label>
                        <select name="id_cat_rol" id="id_cat_rol" class="form-select" required>
                            <?php echo $Usuario->opcionesRoles(); ?>
                        </select>
                    </div>

                    <div class="col">
                        <label for="id_persona">Persona</label>
                        <select name="id_persona" id="id_persona" class="form-select" required>
                        <?php echo $Usuario->opcionesPersonas(); ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
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