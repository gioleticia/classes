<?php
require_once "/CLASSES/SRC/Clientes.php";
require_once "/CLASSES/SRC/Carros.php";
require_once "/CLASSES/SRC/vendedor.php";

 $cli = new Clientes;
 $cli -> nome = "emanuelle da silva barbosa";
 $cli -> idade = "19";
 $cli -> telefone = "41 0000-0000";
 $cli -> cpf = "000.000.000-00";
$cli -> email = "abcdedfgh@gmail.com";


var_dump($cli);
echo "<br>";
var_dump($cli);
echo "<br>";

$vendedor = new Vendedor;
$vendedor -> nome = "clearaldo";
$vendedor -> matricula =  "1225521";
$vendedor -> cpf = "120.000.856-87";
$vendedor -> telefone = "41 9999-1111";
$vendedor -> periodo = "manhã";
$vendedor -> email = "cleraldo.da.silva@gmail.com";

var_dump($Vendedor);
echo "<br>";
var_dump($Vendedor);
echo "<br>";

$car = new Carros;
$car -> modelo = "panicar";
$car -> descricao = "um carro hiper tecnologico, ideal para pessoas que amam um lanche de padaria, possui um euipamento que o usuario seleciona o lache e ele cria, exemplos: pães de queijo, bolo, etc. alem  de possuir uma maquina de expresso.";
$car -> cor = " marrom claro";
$car -> portas = "4 portas";
$car -> rodas = "original panicar";
$car -> motor = "turbocoffe";
$car -> preco = "R$ 100mil";
$car -> ano = "2025";
$car -> placa = "GIO2902";
$car -> quilometragem = "0KM";

var_dump($car);
echo "<br>";
var_dump($car);
echo "<br>";















