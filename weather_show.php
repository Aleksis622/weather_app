<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather app</title>
</head>
<body>
 <?php 
 $data = file_get_contents("https://emo.lv/weather-api/forecast/?
 city=cesis,latvia");
 $weatherData = json_decode($data, true);
 echo "Pilsēta: " . $weatherData['city']['name'];
 
 ?>
</body>
</html>