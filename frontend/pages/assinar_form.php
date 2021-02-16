<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="./images/logo.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;600&display=swap" rel="stylesheet">

</head>

<body id="cadastro">
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
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarmenu" style="width:25%;">
                    <div>
                        <a href="./login.php"><button type="button" class="ms- me-3 btn border border-warning rounded-pill"style="width:100%;" >Login</button></a>
                    </div>
                    <div> 
                    <a href="./cadastro.php"><button type="button" class="btn btn-warning rounded-pill" style="width: 100%;">Cadastre-se</button></a>
                    </div>
                </div>
                
            </div>
        </nav>
    </header>

    <main id="background">
        <div class="container d-flex justify-content-center h-75">
            <div class="card border-light p-3 m-5 mb-0 b-4" style="max-width: 32rem; border-radius: 40px">

                <form action="../../backend/cadastro_user.php" method="POST">

                    <div class="form-group">
                            <div class="row justify-content-center"> 
                            <div class="col ">
                            <h4 id="InputEmail" >bairro:<br>logradouro<br>Número</h4>
                    <div class="form-group">
                            <div class="row justify-content-center">
                            <div class="col-11 p-2  ">
                            <input type="nome" name="nome" class="form-control rounded-pill "  aria-describedby="nome" placeholder=" Seu nome">
                            </div>
                    <div class="form-group">
                            <div class="row justify-content-center">
                            <div class="col-11 p-2 ml-4  " >
                            <input type="email" name="email" class="form-control rounded-pill " aria-describedby="email" placeholder="Seu email">
                            </div>
                    <div class="form-group">
                            <div class="row justify-content-center">
                            <div class="col-11 p-2 mr-5">
                            <input type="number" name="number" class="form-control rounded-pill" aria-describedby="CPF" placeholder="Seu CPF">
                            </div>             
                    <div class="row justify-content-center"> 
                            <div class="col-12">
                            <button type="submit" class="btn btn-warning rounded-pill m-0 p-4">Enviar</button>
                            </div>
                </form>
            </div>
        </div>
    </main>
        </body>
        
    <footer>
        <?php 
            include('../components/footer.html')
        ?>
    </footer>

</body>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</html>

</html>