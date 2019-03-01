<?php

$cep = "72225194";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Confirmar retorno
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//nao verificar SSL 

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

 ?>
