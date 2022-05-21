<?php
    require_once('.\BD.php');

    $bd = new BD();

    $bd->conectar();
    
    $id_producto=$_POST['Id_producto'];
    $id_vendedor=$_POST['id_vendedor'];
    $precio=$_POST['precio'];
    $observaciones=$_POST['observaciones'];
    
    $recordset=$bd->insertar_producto($id_producto, $id_vendedor, $precio, $observaciones);
    
    $bd->desconectar();
    
    header("Location:./../agregarProducto.php");
?>