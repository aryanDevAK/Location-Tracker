<?php
$myfile = fopen("location.txt", "w")
$txt = "Lat: ".$_GET["Lat"] . "\nLong: ". $_GET["Long"];
fwrite($myfile, $txt);
fclose($myfile);
?>
