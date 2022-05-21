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
        <h1 class="col-lg-4 mb-3 text-success">Modo Administrativo</h1>
        <hr>
        <h4 class="col-lg-3 mb-3 text-center">¿Que Desea Realizar?</h4>
    <div class="row justify-content-center mt-5 col-md-3 mb-10">  
        <form method="post" action="RegistroFactura.php">
        <div class="container">
        </div>  
           <div class="row col-left">
            <a href="RegistroFactura.php" class="btn btn-success btn-block mb-4">Ingresar Facturas Compra</a>
           </div>
                        
            <a href="AnularFactura.php" class="btn btn-success btn-block mb-4">Reg.Facturas Venta</a>
            <a href="FacturasIngresadas.php" class="btn btn-danger btn-block mb-4">Anular Factura</a>
            
            <div>
                <a href="CalculoFacturas.php" class="btn btn-primary btn-block mb-4">Calcular Facturas</a>
            </div>
        </form>
              
    </div>
    </div>
        

      <div class="container mt-5 justify-content-center mb-10">
        
      </div> 
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    
    <?php include 'Include/footer.php';?>
</html>
