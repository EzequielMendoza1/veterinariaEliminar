<?php
    $sql = "SELECT * FROM v_vacunas";
    $respuesta = mysqli_query($conexion, $sql);
?>

<table class="text-center table table-hover table-sm">
    <thead>
        <tr>
            <th>NOMBRE DUEÑO</th>
            <th>NOMBRE DE LA MASCOTA</th>
            <th>ATENDIO</th>
            <th>TIPO</th>
            <th>NOMBRE VACUNA</th>
            <th>FECHA DE VACUNA</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>   
        </tr>
    </thead>

    <tbody>
        <?php while ($ver = mysqli_fetch_array($respuesta)) { ?>

        <tr>
            <td><?php echo $ver['nombrePersona'];?></td>
            <td><?php echo $ver['nombreMascota'];?></td>
            <td><?php echo $ver['nombreUsuario'];?></td>
            <td><?php echo $ver['tipo'];?></td>
            <td><?php echo $ver['nombreVacuna'];?></td>
            <td><?php echo $ver['fechaVacuna'];?></td>
            <td><a href="#" class="btn btn-outline-warning"><i class="fa-solid fa-pen"></i> Editar</a></td>

            <td>
                <a href="../../procesos/vacunas/eliminarVacuna.php?id=<?php echo $ver['idVacuna']; ?>" class="btn btn-outline-danger">
                    <i class="fa-solid fa-trash"></i> Eliminar
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>