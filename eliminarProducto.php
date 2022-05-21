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
        <title>Eliminar</title>
    </head>
    <body>
        <?php include 'Include/head.php';?>
        
        <h1 class="col-lg-4 mb-3 text-success text-center">ELIMINAR PRODUCTO</h1>
        <hr>
        <?php
            include_once 'menuProductos.php';
        ?>
        
        
        <div class="col-12 col-md-12 mb-5 mt-5">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <th width="15%">ID</th>
                    <th width="35%">Nombre</th>
                    <th width="35%">Sucursal</th>
                    <th width="15%">Acción</th>
                </thead>
                <tbody>
                <?php
                    $recordset=$bd->recuperar_Producto();
                    foreach($recordset as $fila) {
                        echo "<tr>
                                <td>".$fila['id_producto']."</td>
                                <td>".$fila['id_vendedor']."</td>
                                <td>".$fila['precio']."</td>    
                                <td>".$fila['observaciones']."</td> 
                                <td><a href='./BD/elproducto.php?id_producto=".md5($fila['id_producto'])."' type='button' class='btn btn-success'>Eliminar</button></td>                                    
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
