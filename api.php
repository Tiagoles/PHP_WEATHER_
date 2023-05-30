<?php

require("./vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$getsenha = getenv('apiKey');
$senha = $_ENV['apiKey'];
$urlApiPais = 'https://flagsapi.com/flat/64.png';
$DataInput = $_POST['Local'];
$url = "https://api.openweathermap.org/data/2.5/weather?q=$DataInput&units=metric&appid=$senha&lang=pt_br";
class GetWeatherData {
    public $url;
    public function __construct($url){
        $this->url = $url;
    }
    public function GetDataApi(){
        $response = file_get_contents($this->url);
        $responseJson = json_decode($response);
       print_r($responseJson);
    }
}
$DataUrl = new GetWeatherData($url);
$DataUrl->GetDataApi();
// sleep(5);
// header('location: home.php');
?>
