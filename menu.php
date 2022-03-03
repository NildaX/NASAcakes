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
        <h1>NUESTRO MENÚ </h1>
        <div class="row" align="center">
            <div class="col-6">
            <h2>Nuestros pasteles </h2>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Sabores</th>
                            <th scope="col">Precios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chocolate</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <td>Fresa</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <td>Tres leches</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <td>Platano</td>
                            <td>$300</td>
                        </tr>
                        <tr>
                            <td>Chessecake</td>
                            <td>$300</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div class="col-6">
                <h2>Nuestros adornos </h2>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Adornos</th>
                            <th scope="col">Precios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Galletas</td>
                            <td>+$50</td>
                        </tr>
                        <tr>
                            <td>Gomitas</td>
                            <td>+$50</td>
                        </tr>
                        <tr>
                            <td>Gelatina</td>
                            <td>+$50</td>
                        </tr>
                        <tr>
                            <td>Frutos rojos</td>
                            <td>+$150</td>
                        </tr>
                        <tr>
                            <td>Chocolate</td>
                            <td>+$200</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="fcc-btn" href="/NASAcakes/realizar_pedido.php">Realizar pedido</a>
    </div>
    <br>
    <br>
</body>
</html>