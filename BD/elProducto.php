<?php
    require_once('.\BD.php');

    $bd = new BD();

    $bd->conectar();
    
    $id_producto=$_GET['id_producto'];
    
    $recordset=$bd->eliminar_producto($id_producto);
    
    $bd->desconectar();
    
    header("Location:./../eliminarProducto.php");
?>