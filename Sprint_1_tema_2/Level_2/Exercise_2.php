<?php
//CONSTANTS
define ('CHOCOLATE_PRICE', 1.0);
define ('GUM_PRICE', 0.5);
define ('CANDY_PRICE', 1.5);
//FUNCTION
function calculateSubTotal(int $quantity, string $product) : float {
    $sweet = strtolower($product);
    $subTotal = 0;
    switch ($sweet) {
        case 'chocolates':
            $subTotal = CHOCOLATE_PRICE * $quantity;
            break;
        case 'chicles':
            $subTotal = GUM_PRICE * $quantity;
            break;
        case 'caramelos':
            $subTotal = CANDY_PRICE * $quantity;
            break;
    }
    return $subTotal;
}
//PROGRAM (CONSOLE INTERACTION)
echo '¡Hola! ¿Cuántos productos quieres llevar?' . PHP_EOL;
$numProducts = fgets(STDIN);
$numProducts = trim($numProducts);
$total = 0;
for ($i = 1; $i <= $numProducts; $i++) {
    $rightProduct = 0;
    while ($rightProduct == 0) {
        echo 'Elige el producto ' . $i . ': ¿chocolates, chicles o caramelos?' . PHP_EOL;
        $product = fgets(STDIN);
        $product = trim($product);
        $product = strtolower($product);
        if ($product == 'chocolates' || $product == 'chicles' || $product == 'caramelos') {
            echo '¿Cuántos ' . $product . ' quieres?' . PHP_EOL;
            $quantity = fgets(STDIN);
            $quantity = trim($quantity);
            $total += calculateSubTotal($quantity, $product);
            $rightProduct = 1;
        } else {
            echo 'ERROR. Escoge o chocolates o chicles o caramelos.' . PHP_EOL;
        }
    }
}
echo 'El precio a pagar es ' . $total . ' euros.' . PHP_EOL;
?>