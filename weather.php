
<?php

$weather=$_GET["weather"];
$weather=str_replace(" ","",$weather);

$w=file_get_contents("http://www.weather-forecast.com/locations/$weather/forecasts/latest");
if($w=="")
echo "Could not find this place. Please try again";
else
preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<\/span><\/span><\/span>/',$w,$matches);
echo $matches[1];

?>
