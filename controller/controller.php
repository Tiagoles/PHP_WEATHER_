<?php
include("../model/class.php");
require("../vendor/autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();
$getkey = getenv('apiKey');
$key = $_ENV['apiKey'];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if ($_POST['acao'] == 'exibir') {
            $DataInput = $_POST['Local'];
            $url = "https://api.openweathermap.org/data/2.5/weather?q=$DataInput&units=metric&appid=$key&lang=pt_br";
            $DataUrl = new GetWeatherData($url);
            $responseApi = $DataUrl->GetDataApi();
        } 
            if($responseApi == null){
                ?>
                <script>  $("#data-clima").hide();</script>
                <?php
                echo '<div class="alert alert-danger text-danger alert-dismissible fade show" role="alert"><button class="btn btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>Cidade não encontrada, tente Novamente.</div>';
            }   
            else {
                $Pais = $responseApi['sys']['country'];
                $NomeCidade = $responseApi['name'];
                $temperatura = $responseApi['main']['temp'];
                $Umidade = $responseApi['main']['humidity'];
                $VentoVelocidade = $responseApi['wind']['speed'];
                $descricaoTempo = $responseApi['weather'][0]['description'];
                $iconClima = $responseApi['weather'][0]['icon'];
                
            ?>
                <script>
                    $('#data-clima').show();
                    $('#data-clima').css('display', '');
                    $('#country').attr("src", 'https://flagsapi.com/<?php echo $Pais?>/flat/64.png');
                    $('#city').html('<?php echo $NomeCidade?>');
                    $('#city').attr('href', 'https://www.google.com/maps/place/<?=str_replace('', '+' , $NomeCidade)  ?>')
                    $('#temperatura span').html('<?= intval( $temperatura) ?>');
                    $('#descricao').html('<?= ucfirst($descricaoTempo) ?>');
                    $('#icon-clima').attr('src', 'http://openweathermap.org/img/wn/<?=$iconClima?>.png')
                    $('#umidade span').html('<?=$Umidade?>%');
                    $('#vento span').html('<?=$VentoVelocidade?> Km/H');
                </script>
            <?php
            }
            exit();  
    }

