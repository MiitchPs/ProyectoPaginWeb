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
        <?php
            include_once 'menu.php';
        ?>   
        <h1 class="col-lg-4 mb-3 text-success text-center">Modificacion DE USUARIOS</h1>
        <hr>
        <h4 class="col-lg-3 mb-3 text-center">¿QUE DESEA REALIZAR?</h4>
         
        <div class="col-12 col-md-12"> 
            <form action="./BD/modVendedor.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Vendedor">Vendedor</label>
                            <select required name="vendedor" class="form-control" id="Vendedor">
                                <option value="">(Seleccione un vendedor)</option>
                                <?php
                                    $recordset=$bd->recuperar_vendedores();
                                    foreach($recordset as $fila) {
                                        echo "<option value=".$fila['id'].">".$fila['id']."-".$fila['nombre']."-".$fila['sucursal'],"</option>\n";   
                                    }
                                ?>
                            </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nuevo nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Sucursal">Nueva sucursal</label>
                            <select required name="sucursal" class="form-control" id="Sucursal">
                                <option value="">(Seleccione una sucursal)</option>
                                <?php
                                    $recordset=$bd->recuperar_sucursales();
                                    foreach($recordset as $fila) {
                                        echo "<option value=".$fila['id_sucursal'].">".$fila['sucursal']."</option>\n";   
                                    }
                                ?>
                            </select>
                    </div>
                </div>

                <div class="form-group">
                    <button name="modificar" type="submit" class="btn btn-success  btn-block col-lg-2 mb-5">Modificar</button>
                </div>
            </form>
        </div>
    </body>
    <?php include 'Include/footer.php';?>
</html>
<?php
    $bd->desconectar();
?>
