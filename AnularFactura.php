<!DOCTYPE html>
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
    <div class="row justify-content-center">
        <h1 class="col-lg-4 mb-3 text-center text-danger">Registrar Factura Venta</h1>
        <hr>
        <h4 class="col-lg-3 mb-3 text-center text-danger">Datos de la Factura Ventaas</h4>
    </div>
      <div class="container mt-5 justify-content-center mb-10">
        <form method="post" action="DetalleFactura.php" class="row g-3">
         <div class="col-md-4">
           <div class="form-outline">
             <input
               type="text"
               class="form-control"
               id="form1"
               required
             />
             <label type="text" for="form1" name="txtEmpresa" class="form-label">Empresa</label>
           </div>
         </div>
         <div class="col-md-4">
           <div class="form-outline">
             <input
               type="text"
               class="form-control"
               id="form1"
               required
             />
             <label type="text" for="form1" name="txtNumeroDocumento" class="form-label">N° Documento</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-outline">
             <input type="text" class="form-control" id="form1" required />
             <label for="form1" name="txtCodigoAnulacion" class="form-label">Cod. Anulacion</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-outline">
               <input type="number" class="form-control" id="form1" required />
             <label for="form1" name="txtCodPostal" class="form-label">Codigo Postal</label>
           </div>
         </div>
            <div class="col-md-6">
           <div class="form-outline">
               <input type="number" class="form-control" id="form1" required />
             <label for="form1" name="txtRutEmpresa" class="form-label">Rut Empresa</label>
           </div>
         </div>
     <div class="col-md-2 ">
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
               Confirmo que deseo Anular la Factura.
             </label>
           </div>
         </div>
         <div class="col-12">
           <button class="btn btn-outline-danger" type="submit">Anular Factura</button>
         </div>
       </form>
          <a href="ModeAdmin.php" class="btn btn-outline-danger mb-4 mt-3">Volver</a>
      </div> 
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    
    <?php include 'Include/footer.php';?>
</html>
