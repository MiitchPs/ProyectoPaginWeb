<html>
    <head>
        <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title></title>
    </head>
    <body>
        <?php include 'Include/head.php';?>
        
        <h1 class="col-lg-4 mb-3 text-danger">Modo Administrador</h1>
        <hr>
        <h4 class="col-lg-3 mb-3 text-center">¿Que Desea Realizar?</h4>
        
        <div class="row" class="mt-10"></div>
        <?php
            include_once 'menu.php';
        ?>
    </body>
    <a href="ModeAdmin.php" class="btn btn-outline-danger mb-4 mt-3">Volver</a>
    <?php include 'Include/footer.php';?>
</html>
