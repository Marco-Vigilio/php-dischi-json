<?php

$string = file_get_contents("./db/dischi.json");

header('Content-Type: application/json');

$result = json_encode($string);
echo ($string);

?>