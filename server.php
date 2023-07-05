<?php

$string = file_get_contents("./db/dischi.json");

//$result = json_encode($string);

header('Content-Type: application/json');

echo ($string);

?>