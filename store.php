<?php
$lat = $_GET["lat"] ?? "Not provided"; // Handle missing lat parameter
$long = $_GET["long"] ?? "Not provided"; // Handle missing long parameter

$myfile = fopen("location.txt", "a"); // Append to the file
$txt = "Lat: " . $lat . "\nLong: " . $long . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\n\n"; // Add newlines for better formatting
fwrite($myfile, $txt);
fclose($myfile);

echo "Location saved successfully!"; // Provide feedback to the user
?>
