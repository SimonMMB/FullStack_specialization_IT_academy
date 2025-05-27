<?php
require_once 'Barcelona.php';
require_once 'Barrio.php';

$datosBarrios = [
    ['El Raval', 1.098, 47274, Distrito::CiutatVella, 'Jordi Rabassa Massons'],
    ['La Barceloneta', 1.314, 14274, Distrito::CiutatVella, 'Jordi Rabassa Massons'],
    ["La Nova Esquerra de l'Eixample", 1.338, 57824, Distrito::Eixample, 'Pau González Val'],
    ['Poble Sec', 0.4605, 40104, Distrito::SantsMontjuic, 'Marc Serra Solé']
];

$barcelona = new Barcelona();

foreach($datosBarrios as $datosBarrio) {
    $barcelona->setBarrio(new Barrio(...$datosBarrio));
}

$barrioMasPoblado = $barcelona->buscarBarrioMasPoblado();
$ciutatVella = 'ciutat vella';
$barriosDeCiutatVella = $barcelona->buscarBarriosDeDistrito($ciutatVella);

echo 'El barrio más poblado es ' . $barrioMasPoblado . PHP_EOL;
echo 'Barrios que pertenecen a Ciutat Vella: ' . implode(', ', $barriosDeCiutatVella) . PHP_EOL;
?>