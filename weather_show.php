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
<h1>Weather in <?php echo "$city, $country"; ?></h1>
  <p><strong>Local Time:</strong> <?php echo $localtime; ?></p>
  <p><strong>Temperature:</strong> <?php echo $temp; ?> °C</p>
  <p><strong>Feels Like:</strong> <?php echo $feelsLike; ?> °C</p>
  <p><strong>Condition:</strong> <?php echo $weatherMain; ?> (<?php echo $weatherDesc; ?>)</p>
  <p><strong>Wind Speed:</strong> <?php echo $wind; ?> m/s</p>
  <p><strong>Pressure:</strong> <?php echo $pressure; ?> hPa</p>
  <p><strong>Humidity:</strong> <?php echo $humidity; ?> %</p>
  <p><strong>Icon:</strong> <img src="http://openweathermap.org/img/wn/<?php echo $icon; ?>@2x.png" alt="Weather icon"></p>
</body>
</html>