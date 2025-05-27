<?php
namespace Dependencies;

use Exception;

class Container
{
    private array $services = [];

    public function set(string $name, callable $function) 
    {
        $this->services[$name] = $function;
    }

    public function get(string $name, ...$args)
    {
        if (!isset($this->services[$name])) {
            throw new Exception('Function ' . $name . ' is not registered in Container');
        }
        return $this->services[$name]($this, ...$args);
    }
}

?>