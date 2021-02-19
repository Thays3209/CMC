<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <link rel="icon" href="../image/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Cadê Minha Casa?</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container-fluid">
                <a href="../../index.php" style="margin-left: 16rem; position: relative; right: 2rem; " class="navbar-brand">
                    <img src="../images/logo.png" alt="Página principal" style="width: 2.5rem; position: relative;">
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-start" style="width: 70%;" id="navbarmenu">
                    <ul class="navbar-nav">

                        <li class="navbar-item ms-5">
                            <a href="../../index.php" class="nav-link">Inicio</a>
                        </li>
                        <li class="navbar-item ms-5">
                            <a href="./assinado.php" class="nav-link">Abaixo-assinado</a>
                        </li>

                    </ul>



                </div>
                <div class="collapse navbar-collapse" id="navbarmenu" style="width:25%;">
                    <div class="me-3 mb-1">
                        <a href="./login.php"><button type="button" class="ms- me-3 btn border border-warning rounded-pill" style="width:100%;">Login</button></a>
                    </div>
                    <div class="me-3 mb-1">
                        <a href="./cadastro.php"><button type="button" class="btn btn-warning rounded-pill" style="width: 100%;">Cadastre-se</button></a>
                    </div>
                </div>
                <!-- <div class="collapse navbar-collapse" id="navbarmenu" style="border: solid 1px #000;">
                    <button type="button" class="ms-5 me-3 btn border border-warning rounded-pill" >Login</button>
                    <button type="button" class="btn btn-warning rounded-pill">Cadastre-se</button>
                </div> -->
            </div>
        </nav>
    </header>


    <div class="container-fluid mt-lg-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-12 align-self-start text-center">
                <h1 class="display-3 fw-bolder text-body">Cadê Minha Casa?</h1>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-lg-5 mt-sm-3">

            <div class="container">
                <div class="row mx-5">

                    <div class="col-md-4 px-4 ">
                        <div class="mb-4 shadow-sm text-center">
                            <p>O que fazemos?</p>
                            <p>
                              Nossa missão é mapear o maior número de imóveis
                              abandonados com a ajuda da população e, com base nesses dados,
                              cobrar as prefeituras locais para que cumpram sua fubção social da propriedade.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 px-4">
                        <div class="mb-4 shadow-sm text-center">
                            <p>Como?</p>
                            <p>
                              Queremos ser o principal aliado dos movimentos 
                              sociais para expor o problema de defit de moradia, 
                              cobrando políticas publicas para que todas as pessoas 
                              tenham acesso ao seu Direto à Moradia.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4  px-4">
                        <div class="mb-4 shadow-sm text-center">
                            <p>O que queremos?</p>
                            <p>
                                Com empatia pelo próximo,queremos usar a tecnologia 
                                para trazer informações,levantamento de dados e pressão para que causas
                                sociais sejam atendidas, assim diminuindo os níveis de Défit de Moradia e 
                                trabalhando sempre para dar voz ás pessoas em vunerabilidade social(habitacional).
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-9">
                <hr>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-10 col-sm-12 text-center">
                <h1 class="display-2 text-body fw-bolder">Quem somos?</h1>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-12">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="20000">

                            <img src="../images/fotos.png" class="d-block w-100" alt="...">
                            <break>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>