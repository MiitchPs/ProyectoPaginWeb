<?php
    require_once('.\BD.php');

    $bd = new BD();

    $bd->conectar();
    
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $sucursal=$_POST['sucursal'];
    
    $recordset=$bd->insertar_vendedor($id, $nombre, $sucursal);
    
    $bd->desconectar();
    
    header("Location:./../agregar.php");
?>