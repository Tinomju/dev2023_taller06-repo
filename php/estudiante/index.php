<?php
    require_once('estudianteModel.php');
    $object = new estudianteModel();
    $rows = $object->listar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <div class="mb-3"></div>
    </div>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title> -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/table.css">
</head>

<body>
    <?php
    require_once("../navbar.php");
    ?>
    <div class="container">
        <div class="table-responsive table-table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
            <table class="table table-striped mb-0">

                <thead style="background-color: #002d72">
                    <tr>
                        <td scope="col">ID</td>
                        <td scope="col">Nombre</td>
                        <td scope="col">Apellido</td>
                        <td scope="col">Operaciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?= $row['idEstudiante']?></td>
                            <td><?= $row['nombre']?></td>
                            <td><?= $row['apellido']?></td>
                            <td>
                                <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#idver<?=$row['idEstudiante']?>" >Ver</a>
                                <a href= "edit.php?id=<?= $row['idEstudiante']?>" class="btn btn-warning">Editar</a>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#iddel<?=$row['idEstudiante']?>" >Eliminar</a>

                                <!-- modal para ver y del -->
                                <?php
                                    include ('viewModal.php');
                                    include ('deleteModal.php');
                                ?>
                            
                            </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
                </divS>
            </table>
        </div>
</body>
<script src="../../js/bootstrap.bundle.min.js"></script>

</html>