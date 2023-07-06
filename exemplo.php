<?php 

require_once './vendor/autoload.php';

use Acer\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('42710400');

$rua = $resultado['logradouro'];
$bairro = $resultado['bairro'];
$cidade = $resultado['localidade'];
$uf = $resultado['uf'];

$resultado['complemento'] = "Casa 6, lote 3";

echo "$rua fica no bairro $bairro em $cidade - $uf";
echo "\n";
echo "\n";
print_r($resultado);

?>