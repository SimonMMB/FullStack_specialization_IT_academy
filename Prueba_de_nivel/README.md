📋 NOTA

Una alternativa al método "buscarBarrioMasPoblado()" podría ser "buscarBarriosMasPoblados()", o sea: un método que en lugar de retornar un string con el nombre de un barrio retorne un array de barrios. Esto sería útil para el caso en que hubiera más de un barrio con la misma cantidad de habitantes y esa cantidad fuera la mayor. Sería así:

    public function buscarBarriosMasPoblados(): array
    {
        $barriosMasPoblados = [];
        $mayorPoblacion = 0;
        foreach ($this->barrios as $barrio) {
            if ($barrio->getPoblacion() >= $mayorPoblacion) {
                $mayorPoblacion = $barrio->getPoblacion();
                $barriosMasPoblados[] = $barrio->getNombre();
            }
        }

        return $barriosMasPoblados;
    }