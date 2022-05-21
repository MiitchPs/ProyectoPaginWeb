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
        <title>Agregar</title>
    </head>
    <body>
        <?php include 'Include/head.php';?>
        <h1 class="col-lg-4 mb-3 text-danger text-center">AGREGAR PRODUCTO</h1>
        <hr>
        
        <?php
            include_once 'menuProductos.php';
        ?>
        
        <div class="col-12 col-md-12"> 
            <form action="./BD/inProducto.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Id_producto">ID Producto</label>
                        <input name="Id_producto" type="text" class="form-control" placeholder="ID producto">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="id_vendedor">ID Vendedor</label>
                        <input name="id_vendedor" type="text" class="form-control" placeholder="ID Vendedor">
                    </div>
                     <div class="form-group col-md-6">
                        <label for="precio">Precio</label>
                        <input name="precio" type="text" class="form-control" placeholder="$$$$$">
                    </div>
                    <div class="form-group col-md-6">
                        <label for=observaciones>Nombre/Producto</label>
                        <input name="observaciones" type="text" class="form-control" placeholder="Producto">
                    </div>
                </div>
                <div class="form-group">
                    <button name="insertar" type="submit" class="btn btn-danger  btn-block col-lg-2">Guardar</button>
                </div>
                
                <a href="ModeAdmin2.php" class="btn btn-outline-danger mb-4 mt-3">Volver</a>
            </form>
        </div> 
        <div class="col-12 col-md-12 mb-5">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <th width="20%">ID producto</th>
                    <th width="40%">ID vendedor</th>
                    <th width="40%">precio</th>
                    <th width="40%">observaciones</th>
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
