<?php
    require_once('.\BD.php');

    $bd = new BD();

    $bd->conectar();
    
    $id=$_GET['id'];
    
    $recordset=$bd->eliminar_vendedor($id);
    
    $bd->desconectar();
    
    header("Location:./../eliminar.php");
?>