<!DOCTYPE html>
<?php
include('../controller/controller.php');

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previsão - Tempo</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Ubuntu:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e0651e1f0a.js" crossorigin="anonymous"></script>
    <script src="../js/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<header>
    <nav>
        <div id="container-title">
            <h1>Clima</h1>
        </div>
        <div id="container-img">
            <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-sun-100-most-used-icons-flaticons-lineal-color-flat-icons.png" alt="sol.png">
        </div>
    </nav>
</header>

<body>
    <main>
        <div id="container">
            <div id="container-form">
                <form method="post" id="form" action="../controller/controller.php" autocomplete="off">
                    <input type="text" name="acao" id="acao" placeholder="Digite uma cidade" value="exibir" hidden>
                    <input type="text" name="Local" id="Local" placeholder="Digite uma cidade">
                    <button type="submit" id="button-pesquisa">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div id="data-clima">
                <h2>
                    <i class="fa-solid fa-location-dot"></i>
                    <span id="city"></span>
                    <img src="https://flagsapi.com/flat/64.png" alt="bandeira do pais" id="country">
                </h2>
                <p id="temperatura">
                    <span></span>
                    &deg;C
                </p>
                <div id="descricao-container">
                    <p id="descricao"></p>
                    <img src="http://openweathermap.org/img/wn/01d.png" alt="condicoes do tempo" id="icon-clima">
                </div>
                <div id="detalhes-container">
                    <p id="umidade">
                        <i class="fa-solid fa-droplet"></i>
                        <span></span>
                    </p>

                    <p id="vento">
                        <i class="fa-solid fa-wind"></i>
                        <span></span>
                    </p>
                </div>
            </div>
        </div>
        <div id="response"></div>
    </main>
    <script src="../js/script.js"></script>

</body>

</html>