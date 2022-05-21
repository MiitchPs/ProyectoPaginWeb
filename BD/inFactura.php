<?php
    require_once('.\BD.php');

    $bd = new BD();

    $bd->conectar();
    
    $nombre=$_POST['nombre'];
    $folio=$_POST['folio'];
    $emisor=$_POST['emisor'];
    $receptor=$_POST['receptor'];
    $estadofactura=$_POST['estadofactura'];
    $situacionpago=$_POST['situacionpago'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $ciudad=$_POST['ciudad'];
    $codigopostal=$_POST['codigopostal'];
    $rutempresa=$_POST['rutempresa'];
    $cuotas=$_POST['cuotas'];
    $precio=$_POST['precio'];
    $email=$_POST['email'];
    
    
    
    $recordset=$bd->insertar_factura($nombre, $folio, $emisor, $receptor, $estadofactura, $situacionpago, $direccion, $telefono, $ciudad, $codigopostal, $rutempresa, $cuotas, $precio, $email);
    
    $bd->desconectar();
    
    header("Location:./../RegistroFactura.php");
?>