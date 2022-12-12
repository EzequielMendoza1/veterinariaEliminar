<?php
    $sql = "SELECT * FROM t_persona";
    $respuesta = mysqli_query($conexion, $sql);
?>

<table class="text-center table table-bordered table-sm">
    <thead>
        <tr>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <?php while ($ver = mysqli_fetch_array($respuesta)) { ?>
    <tbody>

        <tr>
            <td><?php echo $ver['paterno']; ?></td>
            <td><?php echo $ver['materno']; ?></td>
            <td><?php echo $ver['nombre']; ?></td>
            <td><?php echo $ver['telefono']; ?></td>
            <td><a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen"></i> Editar</a></td>
            <td>
                <a href="../../procesos/persona/eliminarPersona.php?id=<?php echo $ver['id_persona']; ?>" class="btn btn-outline-danger">
                    <i class="fa-solid fa-trash"></i> Eliminar
                </a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>