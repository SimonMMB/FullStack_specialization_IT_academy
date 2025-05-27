<?php
enum Face : string {
    case Ace = 'Ace';
    case K = 'K';
    case Q = 'Q';
    case J = 'J';
    case Seven = '7';
    case Eight = '8';
}

class PokerDice 
{
    private Face $face;
    private static int $numberOfThrows = 0;
    
    public static function getNumberOfThrows(): int 
    {
        return self::$numberOfThrows;
    }

    public function throwDice() 
    {
        $faces = Face::cases();
        $randomFace = $faces[array_rand($faces)];
        $this->face = $randomFace;
        self::$numberOfThrows++;
    }

    public function shapeName(): Face 
    {
        return $this->face;
    }
}
?>