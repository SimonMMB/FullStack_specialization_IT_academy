<?php
require_once 'Barrio.php';

class Barcelona
{
    private array $barrios;

    public function __construct() 
    {
        $this->barrios = [];
    }

    public function setBarrio(Barrio $barrio)
    {
        $this->barrios[] = $barrio;
    }

    public function buscarBarrioMasPoblado(): string
    {
        $mayorPoblacion = 0;
        foreach ($this->barrios as $barrio) {
            if ($barrio->getPoblacion() >= $mayorPoblacion) {
                $mayorPoblacion = $barrio->getPoblacion();
                $barrioMasPoblado = $barrio->getNombre();
            }
        }

        return $barrioMasPoblado;
    }

    public function buscarBarriosDeDistrito(string $distrito): array
    {
        $barriosDeDistrito = [];
        foreach ($this->barrios as $barrio) {
            if (strtolower($barrio->getDistrito()->value) == strtolower($distrito)) {
                $barriosDeDistrito[] = $barrio->getNombre();
            }
        }

        return $barriosDeDistrito;
    }
}
?>