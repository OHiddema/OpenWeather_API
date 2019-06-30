<?php

// $result="";
$plaats = $_REQUEST["q"];
$appid = 'bd340a0a266de4aeb9236e9505a40097';
$requestURL = 'api.openweathermap.org/data/2.5/weather?q='.$plaats.'&APPID='.$appid.'&units=metric';

$curl = curl_init($requestURL);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

if (!$result) {
   echo 'Er ging iets mis...';
} else {
   $result = json_decode($result, true);
   if ($result['cod']=="404") {
      echo 'Plaats niet gevonden...';
   } else {
      echo 'Plaats: '.$result['name']."\n";
      echo 'Temperatuur: '.$result['main']['temp'];   
   }   
}