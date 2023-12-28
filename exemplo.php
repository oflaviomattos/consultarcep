<?php

require_once "vendor/autoload.php";

use Infoestrutura\CepLookup\Search;

$busca = new Search;

$cep = '22630-011';

$resultado = $busca->getAddressFromZipcode($cep);

print_r($resultado);

?>
