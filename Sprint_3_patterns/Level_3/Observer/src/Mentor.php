<?php

require_once 'Observer.php';

class Mentor implements Observer
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $message): void
    {
        echo $this->name . ' received the message: ' . $message . PHP_EOL;
    }
}

?>