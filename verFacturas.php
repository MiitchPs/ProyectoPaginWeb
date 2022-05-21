<?php
    require_once('.\BD\BD.php');

    $bd = new BD();
    
    $bd->conectar();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Ver</title>
    </head>
    <body>
        <?php include 'Include/head.php';?>
         <h1 class="col-lg-4 mb-3 text-danger text-center">LISTA DE FACTURAS</h1>
        <hr>
        <?php
            include_once 'menuFacturas.php';
        ?>
        
        <div class="col-12 col-md-12 mb-5">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <th width="20%">nombre</th>
                    <th width="40%">folio</th>
                    <th width="40%">emisor</th>
                    <th width="20%">receptor</th>
                    <th width="40%">estadofactura</th>
                    <th width="40%">situacionpago</th>
                    <th width="20%">direccion</th>
                    <th width="40%">telefono</th>
                    <th width="40%">ciudad</th>
                    <th width="20%">codigopostal</th>
                    <th width="40%">rutempresa</th>
                    <th width="40%">cuotas</th>
                    <th width="20%">precio</th>
                    <th width="40%">email</th>
                </thead>
                <tbody>
                <?php
                    $recordset=$bd->recuperar_Factura();
                    foreach($recordset as $fila) {
                        echo "<tr>
                                <td>".$fila['nombre']."</td>
                                <td>".$fila['folio']."</td>
                                <td>".$fila['emisor']."</td>
                                <td>".$fila['receptor']."</td>
                                <td>".$fila['estadofactura']."</td>
                                <td>".$fila['situacionpago']."</td>
                                <td>".$fila['direccion']."</td>
                                <td>".$fila['telefono']."</td>  
                                <td>".$fila['ciudad']."</td>
                                <td>".$fila['codigopostal']."</td>
                                <td>".$fila['rutempresa']."</td>
                                <td>".$fila['cuotas']."</td>
                                <td>".$fila['precio']."</td>
                                <td>".$fila['email']."</td>
                             </tr>";
                        }                     
                ?>
                </tbody>
            </table>
        </div>
    </body>
    <?php include 'Include/footer.php';?>
</html>
<?php
    $bd->desconectar();
?>
