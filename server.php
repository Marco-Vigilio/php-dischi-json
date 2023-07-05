<?php
header('Content-Type: application/json');
$string = file_get_contents("./db/dischi.json");

$result = json_decode($string, true);

echo (json_encode($result));
exit(0);
?>