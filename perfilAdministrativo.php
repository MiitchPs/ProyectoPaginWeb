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
        <h1 class="col-lg-4 mb-3 text-success">Inicio de Sesion</h1>
        <hr>
        <h4 class="col-lg-3 mb-3 text-success">Ingresa Tus Credenciales</h4>
        <hr>
        <h4 class="col-lg-3 mb-3 text-success">Perfil Administrativo</h4>
    </div>
   <div class="container justify-content-center mt-5 col-lg-4 mb-10">
       
       <form method="post">
       <!-- Input Usuario -->
       <div class="form-outline mb-4">
           <input type="text"  class="form-control" name="user"/>
         <label class="form-label">Usuario</label>
       </div>

       <!-- Input Contraseña -->
       <div class="form-outline mb-4">
           <input type="password" class="form-control" name="pass"/>
         <label class="form-label">Contraseña</label>
       </div>
     <!-- 2 columnas del layout -->
       <div class="row mb-4">
         <div class="col d-flex justify-content-center">
           <!-- Check box -->
           <div class="form-check">
             <input
               class="form-check-input"
               type="checkbox"
               value=""
               id="form2Example3"
               checked
             />
             <label class="form-check-label" for="">Recuerdame </label>
           </div>
         </div>

         <div class="col">
           <!-- Link Simple -->
           <a href="#!">Olvidaste TU Contraseña?</a>
         </div>
       </div>

       <!-- Boton inicio Sesion -->
            <div class="row col-left">   
                <a href="ModeAdmin.php" class="btn btn-success btn-block mb-4">INICIAR SESION</a> 
            </div>
      
       <!-- Boton Registrar -->
       <div class="text-center">
         <p>No eres usuario? <a href="#!">Registrate </a></p>
         <p>O siguenos en :</p>
         <button type="button" class="btn btn-primary btn-floating mx-1">
           <i class="fab fa-facebook-f"></i>
         </button>

         <button type="button" class="btn btn-primary btn-floating mx-1">
           <i class="fab fa-google"></i>
         </button>

         <button type="button" class="btn btn-primary btn-floating mx-1">
           <i class="fab fa-twitter"></i>
         </button>

         <button type="button" class="btn btn-primary btn-floating mx-1">
           <i class="fab fa-github"></i>
         </button>
       </div>
    </form>   
       
     <!--  <div class="row">
           <div class="col-12">
             < ?php           
                  if(isset($_POST['enviar'])){
                   $user=$_POST['user'] ?? '';
                   $pass=$_POST['pass'] ?? '';
                   if($user=='Root' && $pass=='777'){ 
                      header('Location:./../ModeAdmin.php');
                   }else{
                      if($user=='Admin' && $pass=='123'){  
                      }               
                   }
                }
             ?>  
           </div>
         </div> -->
       
    </div>

        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    
    <?php include 'Include/footer.php';?>
</html>
