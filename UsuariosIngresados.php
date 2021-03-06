<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
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
        <meta charset="UTF-8">
        <title></title>
    
    </head>

    <body>
        <?php include 'Include/head.php';?>
        
        <div class="login-popup-wrap new_login_popup">
            <div class="login-popup-heading text-center mb-3">        
                <h4><i class="" aria-hidden="true"></i>Usuarios Registrados</h4>
            </div>
            <div class="login-popup-heading text-center text-primary">        
                <h4><i class="fa fa-lock" aria-hidden="true"></i>Deshabilitar Usuarios</h4>
            </div>
            <div class="container row-5 col-md-10 login-popup-heading">
                <form action="" method="post">
                    <div class="mb-4 ">
                        <h5 class="text-primary mb-3">??Que Usuario desea Deshabilitar?*</h5>
                        <div class="form-check col-md-8"><input type="checkbox" id="todos1" name="todos" value="1" class="form-check-input" onclick="seleccionar(1);"><label class="label label-default">Seleccionar todos</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.1" name="eleccion1[]" value="Wade Wilson" class="form-check-input" /><label class="form-check-label">Wade Wilson</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.2" name="eleccion1[]" value="Juanito Rambo" class="form-check-input" /><label class="form-check-label">Juanito Rambo</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.3" name="eleccion1[]" value="Tony Stark" class="form-check-input" /><label class="form-check-label">Tony Stark</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.4" name="eleccion1[]" value="Jeff Bezos" class="form-check-input" /><label class="form-check-label">Jeff Bezos</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.5" name="eleccion1[]" value="Steve Rogers" class="form-check-input" /><label class="form-check-label">Steve Rogers</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.6" name="eleccion1[]" value="Ed Maverick" class="form-check-input" /><label class="form-check-label">Ed Maverick</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.7" name="eleccion1[]" value="Carl jhonson" class="form-check-input" /><label class="form-check-label">Carl jhonson "cj"</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.7" name="eleccion1[]" value="Natasha Romanoff" class="form-check-input" /><label class="form-check-label">Natasha Romanoff</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.7" name="eleccion1[]" value="Bill Gates" class="form-check-input" /><label class="form-check-label">Bill Gates</label></div>
                        <div class="form-check col-md-8"><input type="checkbox" id="eleccion1.7" name="eleccion1[]" value="Elon Musk" class="form-check-input" /><label class="form-check-label">Elon Musk</label></div>
                    </div>
                    <div>
                        <input type="button" class="btn btn-outline-primary login-popup-btn mb-3" value="Deshabilitar" onclick="validar(this.form)"/>
                    </div>
                </form>  
                <a href="ModeAdmin.php" class="btn btn-outline-primary mb-5">Volver</a>
            </div>  
        </div>

        <script>
            function validar(form) {
                var preg1=document.getElementsByName("eleccion1[]");
                
                var sw=0;
                for(var i=0;i<preg1.length;i++){
                    if(preg1[i].checked){
                        sw=1;
                    }
                }
                
                if(sw==0){
                    alert("Debe seleccionar al menos una opci??n en la respuesta 1");
                    return false;
                }
                
                sw=0;
                
                
                
                form.action="UsuariosDeshabilitados.php";                        
                form.submit();
                return true;
                
            }
            
            function seleccionar(num){
                var todos=document.getElementById("todos"+num);
                var opciones=document.getElementsByName("eleccion"+num+"[]");

                for(var i=0;i<opciones.length;i++){
                    opciones[i].checked=todos.checked;
                }
            }
            
        </script>
    </body>
    <?php include 'Include/footer.php';?>
</html>
