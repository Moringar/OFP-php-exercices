<?php

$file = $_FILES['file'];

echo $file["name"]." d'une taille de ".$file["size"]." a été uploadé avec succés.";

echo "<hr>";

var_dump($file);