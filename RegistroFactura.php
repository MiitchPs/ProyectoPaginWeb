<!DOCTYPE html>
<?php
    require_once('.\BD\BD.php');

    $bd = new BD();
    
    $bd->conectar();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora&family=Yellowtail&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/mdb.min.css" /> 
        <title>Ingreso</title>
    </head>
    <body>   
        <?php include 'Include/head.php';?>
        
        <?php
            include_once 'menuFacturas.php';
        ?>
    <div class="row justify-content-center">
        <h1 class="col-lg-4 mb-3 text-success">Registro de Facturas</h1>
        <hr>
        <h4 class="col-lg-2 mb-3 text-center text-success">Ingreso de Datos</h4>
    </div>
      <div class="container mt-5 justify-content-center mb-10">
       <form action="./BD/inFactura.php" method="POST">
         <div class="form-group col-md-4">
             <div class="">
               <label for="nombre">Empresa</label>
             <input
               type="text"
               class="form-control"
               name="nombre"
               placeholder="Nombre Empresa"
               required
             />
           </div>
         </div>
        <div class="form-group col-md-4">
           <div class="">
             <label for="folio">Folio Factura</label>
             <input
               type="text"
               class="form-control"
               name="folio"
               placeholder="Folio Factura"
               required
             />
           </div>
         </div>
              
              
       <div class="form-group col-md-4">
           <div class="">
             <label for="emisor">Emisor</label>
             <input
               type="text"
               class="form-control"
               name="emisor" 
               placeholder="Nombre Emisor"
               required
             />
           </div>
         </div>
        <div class="form-group col-md-4">
           <div class="">
             <label for="receptor">Receptor</label>
             <input
               type="text"
               class="form-control"
               name="receptor"
               placeholder="Nombre Receptor"
               required
             />
           </div>
         </div>
          <div class="form-group col-md-4">
           <div class="">
             <label for="estadofactura">Estado De la Factura(Vigente o Nula)</label>
             <input
               type="text"
               class="form-control"
               name="estadofactura"
               placeholder="Estado Factura"
               required
             />
           </div>
         </div>
        <div class="form-group col-md-4">
           <div class="">
             <label for="situacionPago">Situcaion de pago</label>
             <input
               type="text"
               class="form-control"
               name="situacionPago"
               placeholder="Estado/Pago"
               required
             />  
           </div>
         </div>
              
         <div class="form-group col-md-4">
           <div class="">
             <label for="direccion">Direccion</label>
             <input
               type="text"
               class="form-control"
               name="direccion"
               placeholder="(Ej:Francisca javeira carrera 81)"
               required
             />
           </div>
         </div>
         <div class="form-group col-md-4">
           <div class="input-group form-outline">
             <span class="input-group-text">+569</span>
             <input
                 type="text"
               class="form-control"
               name="telefono"
               placeholder="(9 caracteres)"
               required
             />
           </div>
         </div>
         <div class="form-group col-md-4">
           <div class="">
             <label for="ciudad">Ciudad</label>               
             <input type="text" class="form-control" name="ciudad" placeholder="ciudad" required />
           </div>
         </div>
         <div class="form-group col-md-4">
           <div class="">
             <label for="codigopostal">Codigo Postal</label>               
             <input type="text" class="form-control" name="codigopostal" placeholder="(Ej: 00003344)" required />
           </div>
         </div>
            <div class="form-group col-md-4">
           <div class="">
             <label for="rutempresa">Rut Empresa</label>               
             <input type="text" class="form-control" name="rutempresa" placeholder="(Sin guion)"required />
           </div>
         </div>
        <div class="form-group col-md-4">
           <div class="">
             <label for="cuotas">Cuotas</label>               
             <input type="text" class="form-control" name="cuotas" placeholder="(De 1 a 10)"required />
           </div>
         </div>
     
        <div class="form-group col-md-4">
           <div class="input-group form-outline">
             <span class="input-group-text" id="inputGroupPrepend2">$</span>
             <input
                 type="text"
               class="form-control"
               name="precio"
               placeholder="(Sin puntos)"
               required
             />
           </div>
         </div>
        <div class="form-group col-md-4">
           <div class="input-group form-outline">
             <span class="input-group-text">@</span>
             <input
                 type="text"
               class="form-control"
               name="email"
               placeholder="(Ej: JuanitoPerez@gmail.com)"
               aria-describedby="inputGroupPrepend2"
               required
             />
           </div>
         </div>    
         <div class="col-12">
           <div class="form-check">
             <input
               class="form-check-input"
               type="checkbox"
               value=""
               id="invalidCheck2"
               required
             />
             <label class="form-check-label" for="invalidCheck2">
               Aceptar Terminos y condiciones.
             </label>
           </div>
         </div>
               <div class="form-group">
                    <button name="insertar" type="submit" class="btn btn-success  btn-block col-lg-2">Guardar</button>
                </div>
        </form>   
          <a href="ModeAdmin.php" class="btn btn-outline-success">Volver</a>
    </div>
        <h4 class="container col-lg-2 mb-3 text-center text-success">Datos ingresados</h4>
        <div class="col-12 mb-5">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <th width="20%">Nombre Empresa</th>
                    <th width="40%">Folio Fact.</th>
                    <th width="40%">Emisor</th>
                    <th width="20%">Eceptor</th>
                    <th width="40%">Estado de la Factura</th>
                    <th width="40%">Situacion Pago</th>
                    <th width="20%">Direccion</th>
                    <th width="40%">Telefono</th>
                    <th width="40%">Ciudad</th>
                    <th width="40%">Rut de la Empresa</th>
                    <th width="40%">Email</th>
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
                                <td>".$fila['rutempresa']."</td>
                                <td>".$fila['email']."</td>
                             </tr>";
                        }                     
                ?>
                </tbody>
            </table>
        </div>
      </div> 
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    
    <?php include 'Include/footer.php';?>
</html>
