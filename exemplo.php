<?php

require_once "vendor/autoload.php";

use Amand\DigitalCep\Search;

$busca = new Search;

$resulltado = $busca->getAdressfromZipcode("01001000");

print_r($resulltado);