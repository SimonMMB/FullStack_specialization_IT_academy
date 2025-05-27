<?php
require_once 'Barcelona.php';

Enum Distrito : string 
{
    case CiutatVella = 'Ciutat Vella'; 
    case Eixample = 'Eixample';
    case SantsMontjuic = 'Sants Montjuic';
    case SarriaSantGervasi = 'Sarriá Sant Gervasi';
    case Gracia = 'Gracia';
    case HortaGuinardo = 'Hora Guinardó'; 
    case NouBarris = 'Nou Barris';
    case SantAndreu = 'Sant Andreu';
    case SantMarti = 'Sant Martí';
};

class Barrio 
{
    private string $nombre;
    private float $superficie;
    private int $poblacion;
    private Distrito $distrito;
    private string $regidor;

    public function __construct(string $nombre, int $superficie, int $poblacion, Distrito $distrito, string $regidor) 
    {
        $this->nombre = $nombre;
        $this->superficie = $superficie;
        $this->poblacion = $poblacion;
        $this->distrito = $distrito;
        $this->regidor = $regidor;
    }

    public function getNombre(): string 
    {
        return $this->nombre;
    }

    public function getPoblacion(): int 
    {
        return $this->poblacion;
    }

    public function getDistrito(): Distrito
    {
        return $this->distrito;
    }
}
?>