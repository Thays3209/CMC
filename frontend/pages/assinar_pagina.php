<?php
    session_start();
    require './frontend/backend/Connection.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <link rel="icon" href="./image/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Cadê Minha Casa?</title>

</head>

<body>
    <?php
       if (isset($_SESSION['id'])) {
        include('./frontend/components/navBar2.html');
        
    } else {
        include('./frontend/components/navBar.html');
    }
        
    ?>

    <div class="container-fluid mt-lg-5 ">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-12 align-self-start text-center">
                <p class="display-6 fw-bolder text-body">Ajude esses lugares a se tornarem moradias!</p>
            </div>
        </div>


        <div class="container mt-0 ">
            <div class="row mt-lg-5 mt-md-3 mt-sm-3 d-flex justify-content-center">         
                <div class="col-lg-5 border py-3 border-warning rounded m-2 justify-content-center">
                    <ul class="list-group list-group-flush">
                        
                        <li class="list-group">Rua:</li>                    
                        <li class="list-group">Bairro</li>
                        <li class="list-group">Nº</li>
                        
                    </ul>
                    <br><br>

                <div class="row d-flex justify-content-center">
                <div class="col-lg-11 col-sm-12 align-self-start text-center">
                    <p>ishing happy birthday, giving gifts and lighting candles became popular as a way</p>
                </div>
                </div>
                <br>

                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                        <a href="./frontend/pages/assinar_form.php"> <button type="button" class=" ms- me-3 btn border btn-warning rounded-pill" data-toggle="modal" data-target="#popUpdate" style="width:100%;" >Ajude a transformar!</button> <a>
                        </div>
                    </div>
                 </div>
    </div>


    <div class="container mt-0 ">
            <div class="row mt-lg-5 mt-md-3 mt-sm-3 d-flex justify-content-center">         
                <div class="col-lg-5 border py-3 border-warning rounded m-2 justify-content-center">
                    <ul class="list-group list-group-flush">
                        
                        <li class="list-group">Rua:</li>                    
                        <li class="list-group">Bairro</li>
                        <li class="list-group">Nº</li>
                        
                    </ul>
                    <br><br>

                <div class="row d-flex justify-content-center">
                <div class="col-lg-11 col-sm-12 align-self-start text-center">
                    <p>ishing happy birthday, giving gifts and lighting candles became popular as a way</p>
                </div>
                </div>
                <br>

                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                        <a href="./frontend/pages/assinar_form.php"> <button type="button" class=" ms- me-3 btn border btn-warning rounded-pill" data-toggle="modal" data-target="#popUpdate" style="width:100%;" >Ajude a transformar!</button> <a>
                        </div>
                    </div>
                 </div>
    </div>

</body>

</html>