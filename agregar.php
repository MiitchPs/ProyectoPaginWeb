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
        <h1 class="col-lg-4 mb-3 text-danger text-center">AGREGAR USUARIOS</h1>
        <hr>
        
        <?php
            include_once 'menu.php';
        ?>
        
        <div class="col-12 col-md-12"> 
            <form action="./BD/inVendedor.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="id">ID Vendedor</label>
                        <input name="id" type="text" class="form-control" placeholder="id">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Sucursal">Sucursal</label>
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
                    <button name="insertar" type="submit" class="btn btn-danger  btn-block col-lg-2">Guardar</button>
                </div>
                <a href="ModeAdmin2.php" class="btn btn-outline-danger mb-4 mt-3">Volver</a>
            </form>
        </div> 
        <div class="col-12 col-md-12 mb-5">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <th width="20%">ID</th>
                    <th width="40%">Nombre</th>
                    <th width="40%">Sucursal</th>
                </thead>
                <tbody>
                <?php
                    $recordset=$bd->recuperar_vendedores();
                    foreach($recordset as $fila) {
                        echo "<tr>
                                <td>".$fila['id']."</td>
                                <td>".$fila['nombre']."</td>
                                <td>".$fila['sucursal']."</td>                                    
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
