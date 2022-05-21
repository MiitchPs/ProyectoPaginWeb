<?php
    require_once('.\BD.php');

    $bd = new BD();

    $bd->conectar();
    
    $nombre=$_POST['nombre'];
    $sucursal=$_POST['sucursal'];
    $id=$_POST['vendedor'];
    
    $recordset=$bd->modificar_vendedor($id, $nombre, $sucursal);
    
    $bd->desconectar();
    
    header("Location:./../ver.php");
?>