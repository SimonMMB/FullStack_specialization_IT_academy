<?php
require_once 'PokerDice.php';

$dices = [];

//Functions
function throwFiveDicesAndShowResult(array $dices): string 
{
    $message = "";
    //Initialization of 5 dices
    for ($i = 0; $i < 5; $i++) {
        $dice = new PokerDice();
        $dices[] = $dice;
    }
    //Throwing these 5 dices
    for ($i = 0; $i < 5; $i++) {
        $dices[$i]->throwDice();
    }
    //Getting the faces
    for ($i = 0; $i < 5; $i++) {
        $face = $dices[$i]->shapeName();
        $faces[] = $face;
    }
    //Showing the luck
    for ($i = 0; $i < 5; $i ++) {
        $message .= "Dice " . ($i + 1) . ": " . $faces[$i]->value . PHP_EOL;
    }

    return $message;
}

function getTotalThrows(): int 
{
    return PokerDice::getNumberOfThrows();
}

//Execution (console interaction)

echo 'Hello! how many players will participate?' . PHP_EOL;
$numberOfPlayers = fgets(STDIN);
$numberOfPlayers = trim($numberOfPlayers);

for ($i = 0; $i < $numberOfPlayers; $i++) {
    echo "Put the name of player " . ($i + 1) . ':' . PHP_EOL;
    $player = fgets(STDIN);
    $player = trim($player);
    $players[] = $player;
}

echo "How many rounds do you want to play?" . PHP_EOL;
$numberOfRounds = fgets(STDIN);
$numberOfRounds = trim($numberOfRounds);

for ($i = 0; $i < $numberOfRounds; $i++) {
    echo "Let's play round number " . ($i + 1) . "! Press any key to continue.";
    fgets(STDIN);
    for ($j = 0; $j < $numberOfPlayers; $j++) {
        echo $players[$j] . ", it's your turn! Press any key to throw 5 dices.";
        fgets(STDIN);
        $luck = throwFiveDicesAndShowResult($dices);
        echo "You obtain: " . PHP_EOL 
                . $luck . PHP_EOL;
    }
}

echo "Finished game! Press any key to see the total number of throws among all the dices.";
fgets(STDIN);
echo "Total throws among all the dices: " . getTotalThrows() . PHP_EOL;
?>