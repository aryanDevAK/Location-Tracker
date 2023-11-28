<?php
$myfile = fopen("location.txt", "w")
$txt = "Lat: ".$_GET["Latitude"] . "\nLong: ". $_GET["Longitude"];
fwrite($myfile, $txt);
fclose($myfile);
?>
