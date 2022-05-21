<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/style.css" rel="stylesheet">
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
        <title></title>
    
    </head>

    <body>
        <?php include 'Include/head.php';?>
        
        <div class="login-popup-wrap new_login_popup mt-10">
            <div class="login-popup-heading text-center mb-10">        
                <h4><i class="" aria-hidden="true"></i>Calculo Total Facturas:</h4> 
                <button type="button" class="btn btn-default login-popup-btn" name="submit" value="1" onclick="addVentas()">Agregar</button>
                <button type="button" class="btn btn-default login-popup-btn" name="submit" value="2" onclick="calcular()">Calcular</button>
                
                <div class="login-popup-heading text-center mb-10 mt-10">
                    <h4 id="cajas"><i class="" aria-hidden="true"></i> </h4>
                    <h4 id="resultado"><i class="" aria-hidden="true"></i> </h4>
                </div>
            </div>
            
        </div>
       <div class="container justify-content-center mt-4 col-md-2 mb-10">
        <a href="ModeAdmin.php" class="btn btn-outline-success btn-block">Volver</a>
       </div>
        <script>
            a = 0;
            
            function addVentas(){
                a++;

                var div = document.createElement('div');
                div.setAttribute('class', 'form-row container');
                div.setAttribute('id','div'+a);
                    div.innerHTML = '<div class="form-group col-md-6 mt-5"><input id="valor_'+a+'" name="'+a+'" type="number" value="" class="form-control" placeholder="Total Factura" /></div><div class="form-group col-md-2 mt-5"><button type="button" class="btn btn-primary btn-sm" onclick="removeValor(div'+a+')">Eliminar</button></div><div id="resultado'+a+'"></div>\n\
                        <div class="form-group col-3 md-1"><input id="valor_'+a+'" name="'+a+'" type="text" min="0" step="1" value="" class="form-container" placeholder="Nomb.Compañia" /></div><div class="form-group col-md-2"></div><div id=""></div>\n\
                        <div class="form-group col-md-2"><input id="valor_'+a+'" name="'+a+'" type="text" min="0" step="1" value="" class="form-container" placeholder="N°Doc" /></div><div class="form-group col-md-2"></div><div id="'+a+'"></div>';
                    document.getElementById('cajas').appendChild(div);
            }
            
            function removeValor(elemento){
                document.getElementById('cajas').removeChild(elemento);
            }
    
            function calcular(){
                //var elements = document.getElementsByTagName("input");
                var elements = document.getElementsByClassName("form-control");
                var suma=0;
                for (var i = 0; i < elements.length; i++) {
                    var elemento = elements[i];
                    if(elemento.value != "") {
                        suma+=(parseInt(elements[i].value));
                        
                        //document.getElementById("resultado"+(i+1)).innerHTML = (parseInt(elemento.value)*0.1);
                       // document.getElementById("resultado"+(parseInt(elemento.getAttribute("name")))).innerHTML = (parseInt(elemento.value)*0.1);
                    }
                }
                
                document.getElementById("resultado").innerHTML = "Precio Total Fact.: " + suma;
            }
            
            
        </script>
        
    </body>
    <?php include 'Include/footer.php';?>
</html>
