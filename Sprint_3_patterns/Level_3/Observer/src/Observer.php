<?php

interface Observer
{
    public function update(string $message): void;
}

?>