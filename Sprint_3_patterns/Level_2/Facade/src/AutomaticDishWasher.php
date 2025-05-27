<?php

require_once 'Collector.php';
require_once 'Soaper.php';
require_once 'Rinser.php';
require_once 'Drier.php';

class AutomaticDishWasher
{
    private Collector $collector;
    private Soaper $soaper;
    private Rinser $rinser;
    private Drier $drier;

    public function __construct()
    {
        $this->collector = new Collector;
        $this->soaper = new Soaper;
        $this->rinser = new Rinser;
        $this->drier = new Drier;
    }

    public function washDirtyDish()
    {
        $this->collector->takeDirtyDish();
        $this->soaper->applySoapToDish();
        $this->rinser->rinseSoapedDish();
        $this->drier->dryDish();
    }
}

?>