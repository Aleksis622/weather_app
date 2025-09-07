<?php 

$jsonData = file_get_contents("data.json");
$data = json_decode($jsonData);

// info par pilsētu

$city = $data->city->name;
$country = $data->city->country;
$timezone = $data->city->timezone;

$current = $data->list[0];
$weather = $current->weather[0];

// laikapstākļu dati

$localtime = gmdate("H:i A", $current->dt +$timezone);
$temp = $current->temp->day;
$feelsLike = $current->feels_like->day;
$weatherMain = $weather->main;
$weatherDesc = $weather->description;
$icon = $weather->icon;
$wind = $current->speed;
$pressure = $current->pressure;
$humidity = $current->humidity;




?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather app</title>
  <link rel="stylesheet" href="weather.css">
</head>
<body>

</body>
</html>