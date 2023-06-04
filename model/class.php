<?php

class GetWeatherData {
    public $url;
    public function __construct($url){
        $this->url = $url;
    }
    public function GetDataApi(){
        $response = @file_get_contents($this->url);
        $responseArr = json_decode($response, true);
        return $responseArr;
    }
};
?>
