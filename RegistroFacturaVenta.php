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
        <h1 class="col-lg-4 mb-3 text-success">Registro de Facturas</h1>
        <hr>
        <h4 class="col-lg-2 mb-3 text-center text-success">Ingreso de Datos</h4>
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
             <label type="text" for="form1" name="txtDireccion" class="form-label">Direccion</label>
           </div>
         </div>
         <div class="col-md-4">
           <div class="input-group form-outline">
             <span class="input-group-text" id="inputGroupPrepend2">+569</span>
             <input
               type="number"
               class="form-control"
               id="form1"
               aria-describedby="inputGroupPrepend2"
               required
             />
             <label for="form1" name="txtTelefono" class="form-label">Telefono</label>
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-outline">
             <input type="text" class="form-control" id="form1" required />
             <label for="form1" name="txtCiudad" class="form-label">Ciudad</label>
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
     <div class="custom-select custom-outline" style="width:150px;">
        <select>
          <option value="0">Cuotas:</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
       </div>
     </div>
        <div class="col-md-4">
           <div class="input-group form-outline">
             <span class="input-group-text" id="inputGroupPrepend2">$</span>
             <input
                 type="number"
               class="form-control"
               id="form1"
               aria-describedby="inputGroupPrepend2"
               required
             />
             <label for="form1" name="txtPrecio" class="form-label">Precio</label>
           </div>
         </div>
            <div class="col-md-5">
           <div class="input-group form-outline">
             <span class="input-group-text" id="inputGroupPrepend2">@</span>
             <input
                 type="email"
               class="form-control"
               id="email"
               aria-describedby="inputGroupPrepend2"
               required
             />
             <label for="form1" name="txtEmail" class="form-label">Email</label>
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
         <div class="col-12">
           <button class="btn btn-outline-success" type="submit">Enviar Factura</button>
         </div> 
        </form>   
          <a href="ModeAdmin.php" class="btn btn-outline-success mb-4 mt-3">Volver</a>
    </div>
      </div> 
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    
    <?php include 'Include/footer.php';?>
</html>
