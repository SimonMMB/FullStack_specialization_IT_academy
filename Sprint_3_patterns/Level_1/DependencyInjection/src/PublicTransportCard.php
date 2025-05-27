<?php
namespace Dependencies;

class PublicTransportCard implements TransportAllower
{
    public function allowToTransport(): void
    {
        echo "MetroCard says: --So it's raining? Don't worry! Put the music on and enjoy the subway ride!" . PHP_EOL;
    }
}

?>