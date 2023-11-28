<?php
$myfile = fopen("location.txt", "w");
$txt = "Lat: ".$_GET["lat"] . "\nLong: ". $_GET["long"]. "\nIP :" . $_SERVER["REMOTE_ADDR"];
fwrite($myfile, $txt);
fclose($myfile);
?>
