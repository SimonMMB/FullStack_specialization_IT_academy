<?php
namespace Dependencies;

class HomeKey
{
    public function openHome()
    {
        echo 'Key says: --Door is open! Welcome home, Simon!' . PHP_EOL;
    }

    public function closeHome()
    {
        echo 'Key says: --Door is closed! Have a great time out there!' . PHP_EOL;
    }
}

?>