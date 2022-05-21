<!DOCTYPE html>
<html>
    <head>
        <title>Cuestionario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </head>
    
    <body>
        <?php include 'head.php';?>
       <div class="container mt-5">
           <div><label class="text-success">Hola!: <?php echo $_POST['txtNombre']; ?></label></div>         
        <h1>Cuestionario</h1>
        <div <div class="container justify-content-center"> 
        <form method="post" action="resultado.php">
            <div>
                <label>Pregunta 1. ¿Qué color prefiere?</label>
                
                <div><input type="radio" id="1.1" name="p1" value="1"><label for="1.1" class="text-danger">Rojo</label></div>
                <div><input type="radio" id="1.2" name="p1" value="2"><label for="1.2" class="text-primary">Azul</label></div>
                <div><input type="radio" id="1.3" name="p1" value="3"><label for="1.3" class="text-success">Verde</label></div>
                <div><input type="radio" id="1.4" name="p1" value="4"><label for="1.4" class="text-dark">Ninguno de los anteriores</label></div>
            </div>
            <div>
                <label>Pregunta 2. ¿Qué color detesta?</label>
                
                <div><input type="radio" id="2.1" name="p2" value="1"><label for="2.1" class="text-danger">Rojo</label></div>
                <div><input type="radio" id="2.2" name="p2" value="2"><label for="2.2" class="text-primary">Azul</label></div>
                <div><input type="radio" id="2.3" name="p2" value="3"><label for="2.3" class="text-success">Verde</label></div>
                <div><input type="radio" id="2.4" name="p2" value="4"><label for="2.4" class="text-dark">Ninguno de los anteriores</label></div>
            </div>
            <div>  
              <div><input class="btn btn-outline-primary mb-10" type="submit"/></div>
          </div>
            <div><input type="hidden" name="txtNombre" value="<?php echo $_POST['txtNombre']; ?>" /></div>
        </form>
      </div>
    </div>   
        
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
    <?php include 'footer.php';?>
</html>
                            