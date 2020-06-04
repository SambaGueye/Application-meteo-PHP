<?php

$ville=$_POST['ville'];

$url="http://api.openweathermap.org/data/2.5/weather?q={$ville}&lang=fr&units=metric&appid=a4f6132e709d31079f0cd3a8738e8a94";
$row=file_get_contents($url);

$json=json_decode($row);

$name=$json->name;

$weather=$json->weather[0]->main;
$desc=$json->weather[0]->description;

$temp=$json->main->temp;
$ressenti=$json->main->feels_like;

$vent=$json->wind->speed;
$deg=$json->wind->deg;

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body id="body">


<div class="container text-center">
    <h1>Météo du jour à <strong><?php echo $name ?></strong></h1>
</div>

<div class="row justify-content-center align-items-center">

<?php
    switch($weather){
        case "Clear":
            ?>
            <div class="icon sunny">
                <div class="sun">
                    <div class="rays"></div>
                </div>
            </div>

        <?php break;
        case "Drizzle":
            ?>
            <div class="icon sun-shower">
                <div class="cloud"></div>
                <div class="sun">
                    <div class="rays"></div>
                </div>
                <div class="rain"></div>
            </div>

        <?php break;
        case "Rain":
            ?>
            <div class="icon rainy">
                <div class="cloud"></div>
                <div class="rain"></div>
            </div>
        
        <?php break;
        case "Clouds": 
            ?>
            <div class="icon cloudy">
                <div class="cloud"></div>
                <div class="cloud"></div>
            </div>

        <?php break;
        case "Thunderstorm": 
            ?>
            <div class="icon thunder-storm">
                <div class="cloud"></div>
                <div class="lightning">
                    <div class="bolt"></div>
                    <div class="bolt"></div>
                </div>
            </div>
        <?php break;
        case "Snow": 
            ?>
            <div class="icon flurries">
                <div class="cloud"></div>
                <div class="snow">
                    <div class="flake"></div>
                    <div class="flake"></div>
                </div>
            </div>
        <?php break;
    }
?>
    <div class="meteo_desc text-left">
    <h2>
        <?php echo $temp; ?> °C / Ressenti <?php echo $ressenti; ?> °C <br>
        <?php echo $vent; ?> km/h - <?php echo $deg; ?><br>
        <?php echo $desc; ?>

    </h2>
    </div>
</div>





















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>