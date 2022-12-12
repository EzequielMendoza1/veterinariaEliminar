<?php
    $sql = "SELECT * FROM v_usuarios";
    $respuesta = mysqli_query($conexion, $sql);
?>

<table class="text-center table table-hover table-bordered table-sm">
    <thead>
        <tr>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($ver = mysqli_fetch_array($respuesta)) { ?>

        <tr>
            <td><?php echo $ver['paterno'];?></td>
            <td><?php echo $ver['materno'];?></td>
            <td><?php echo $ver['nombrePersona'];?></td>
            <td><?php echo $ver['nombreUsuario'];?></td>
            <td><?php echo $ver['nombreRol'];?></td>
            
            <td>
                <a href="#" class="btn btn-outline-warning">
                    <i class="fa-solid fa-pen"></i> Editar
                </a>
            </td>


            <td>
                <a href="../../procesos/usuario/eliminarUsuario.php?id=<?php echo $ver['idUsuario']; ?>" 
                    class="btn btn-outline-danger">
                        <i class="fa-solid fa-trash"></i> Eliminar
                </a>
            </td>

        </tr>
        <?php } ?>
    </tbody>
</table>