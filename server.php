<?php

$string = file_get_contents("./db/dischi.json");

header('Content-Type: application/json');

echo $string;
//var_dump($string);

?>