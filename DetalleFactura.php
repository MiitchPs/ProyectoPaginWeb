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
    <div class="container mt-30">
        <div class="row mt-5">
            <table class="table table-bordered mb-0">
               <thead>
                   <tr>
                      <th scope="col">Fecha Emision</th>
                      <th scope="col">Fecha Entrega</th>
                      <th scope="col">Nota Venta</th>
                      <th scope="col">Vencimiento</th>
                    </tr>
                <thead>
                <tbody>
                    <tr>
                      <th scope="col">Orden Compra </th>
                      <th scope="col">Condicion de Pago</th>
                      <th scope="col">Vendedor</th>
                      <th scope="col">Tipo Cambio</th>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordeless mb-0">
               <thead>
                    <tr>
                      <th scope="col">Señores:</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Ciudad:</th>
                      <th scope="col">Fono:</th>
                    </tr>
                <thead>
                <tbody>
                    <tr>
                      <th scope="col">Direccion:</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Comuna:</th>
                      <th scope="col">Usuario:</th>
                    </tr>
                    <tr>
                      <th scope="col">R.U.T::</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Giro:</th>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordeless mb-0">
               <thead>
                    <tr>
                      <th scope="col">Despachar A :</th>
                    </tr>
                    <tr>
                      <th scope="col">Observacion :</th>
                    </tr>
                <thead>
            </table> 
            <table class="table table-bordered mb-10">
               <thead>
                    <tr>
                      <th scope="col">Nombre Empresa</th>
                      <th scope="col">Rut Empresa</th>
                      <th scope="col">Direccion</th>
                      <th scope="col">Cod. Postal</th>
                      <th scope="col">Nombre Empresa</th>
                      <th scope="col">Rut Empresa</th>
                      <th scope="col">Direccion</th>
                    </tr>
                <thead>
                <tbody>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">IVA 19%</th>
                      <th scope="col">SubTotal</th>
                    </tr>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Total</th>
                    </tr>
                </tbody>
            </table>
            <a href="RegistroFactura.php" class="btn btn-outline-success mb-4 mt-3">Volver</a>
            
            
            
            
        </div>
    </div>    

        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    
    <?php include 'Include/footer.php';?>
</html>
