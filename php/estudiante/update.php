<?php
    require_once('estudianteModel.php');
    $object = new estudianteModel;
    
    $idEstudiante = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $codigocurso = $_REQUEST['codigocurso'];
    
    $registro = $object->actualizar($idEstudiante,$nombre,$apellido,$codigocurso);

    header('location: index.php'); //llamar a un archivo php y que dibuje una tabla
?>