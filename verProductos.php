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
         <h1 class="col-lg-4 mb-3 text-success text-center">LISTA DE PRODUCTOS</h1>
        <hr>
        <?php
            include_once 'menuProductos.php';
        ?>
        
        <div class="col-12 col-md-12 mb-5">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <th width="40%">precio</th>
                    <th width="40%">Nombre vendedor</th>
                    <th width="40%">Producto</th>
                </thead>
                <tbody>
                <?php
                    $recordset=$bd->recuperar_Producto();
                    foreach($recordset as $fila) {
                        echo "<tr>
                                <td>".$fila['precio']."</td>
                                <td>".$fila['nombre']."</td>                                    
                                <td>".$fila['observaciones']."</td> 
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
