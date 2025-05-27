<?php
namespace Dependencies;

class MotoKey implements TransportAllower
{
    public function allowToTransport(): void
    {
        echo "Moto says: --It's a perfect sunny day! Enjoy the wind in your face!" . PHP_EOL;
    }
}

?>