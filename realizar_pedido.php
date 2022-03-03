<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosp.css">
    <link rel="icon" href="assets/images/logo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body style="background-color:#FFD1DC;"> 
    <div class="container-fluid px-0">
            <?php require 'shared/header.php'?>
    </div> 
    <br>
    <div align="center" class="container"> 
        <label for="sabor1">Realizar pedido</label>
        <br>
        <label for="sabor1">Sabor del pastel:</label>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor1" name="sabor1" value="sabor1">
            </div>
            <div class="col-6">
                <label for="sabor1"> Chocolate</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor2" name="sabor2" value="sabor2">
            </div>
            <div class="col-6">
                <label for="sabor1"> Fresa</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor3" name="sabor3" value="sabor3">
            </div>
            <div class="col-6">
                <label for="sabor1"> Tres leches</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor4" name="sabor4" value="sabor4">
            </div>
            <div class="col-6">
                <label for="sabor1"> Platano</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor5" name="sabor5" value="sabor5">
            </div>
            <div class="col-6">
                <label for="sabor1"> Chessecake</label>
            </div>
        </div>
            <label for="sabor1">Adornos del pastel:</label>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor1" name="sabor1" value="sabor1">
            </div>
            <div class="col-6">
                <label for="sabor1"> Galletas</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor2" name="sabor2" value="sabor2">
            </div>
            <div class="col-6">
                <label for="sabor1"> Gomitas</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor3" name="sabor3" value="sabor3">
            </div>
            <div class="col-6">
                <label for="sabor1"> Gelatina</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor4" name="sabor4" value="sabor4">
            </div>
            <div class="col-6">
                <label for="sabor1"> Frutos rojos</label>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="checkbox" id="sabor5" name="sabor5" value="sabor5">
            </div>
            <div class="col-6">
                <label for="sabor1"> Chocolate</label>
            </div>
        </div>
        <br>
        <label for="fname">Nombre del solicitante:</label>
        <br>
        <input type="text" id="fname" name="fname">
        <br>
        <label for="quantity">Telefono:</label>
        <br>
        <input type="number" id="quantity" name="quantity" min="1" max="5">
        <br>
        <label for="email">Correo electronico:</label>
        <br>
        <input type="email" id="email" name="email">
        <br>
        <a class="fcc-btn" href="/NASAcakes/realizar_pedido.php">Realizar pedido</a>
    </div>
    <br>
    <br>
</body>
</html>