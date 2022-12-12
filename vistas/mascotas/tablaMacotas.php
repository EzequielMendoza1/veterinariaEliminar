<?php
    $sql = "SELECT * FROM v_mascota";
    $respuesta = mysqli_query($conexion, $sql);
?>

<table class="text-center table table-bordered table-hover table-sm">
    <thead>
        <tr>
            <th>NOMBRE DUEÑO</th>
            <th>NOMBRE MASCOTA</th>
            <th>TIPO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>RAZA</th>
            <th>TAMAÑO</th>
            <th>SEXO</th>
            <th>DESCRIPCION</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($ver = mysqli_fetch_array($respuesta)) { ?>

        <tr>
            <td><?php echo $ver['nombrePersona'];?></td>
            <td><?php echo $ver['nombreMascota'];?></td>
            <td><?php echo $ver['tipo'];?></td>
            <td><?php echo $ver['fechaNac'];?></td>
            <td><?php echo $ver['raza'];?></td>
            <td><?php echo $ver['tamanio'];?></td>
            <td><?php echo $ver['sexo'];?></td>
            <td><?php echo $ver['descripcion'];?></td>

            <td><a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen"></i> Editar</a></td>

            <td>
                <a href="../../procesos/mascotas/eliminarMascota.php?id=<?php echo $ver['idMascota']; ?>" class="btn btn-outline-danger">
                    <i class="fa-solid fa-trash"></i> Eliminar
                </a>
            </td>

        </tr>
        <?php } ?>
    </tbody>
</table>