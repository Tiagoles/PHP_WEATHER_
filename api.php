<?php
require("./vendor/autoload.php");


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$senha = getenv('apiKey');
$urlApiPais = 'https://flagsapi.com/flat/64.png';
$dataInput = $_POST['Local'];


class MostraCidade {


}

?>
