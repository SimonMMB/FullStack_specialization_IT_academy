<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dependencies\Container;
use Dependencies\LeaveHome;
use Dependencies\HomeKey;
use Dependencies\CellPhone;
use Dependencies\Wallet;
use Dependencies\TransportAllower;
use Dependencies\MotoKey;
use Dependencies\PublicTransportCard;

//1- Create an instance of Container

$container = new Container();

//2- Register dependencies on Container

$container->set('HomeKey', function()
{
    return new HomeKey();
});

$container->set('CellPhone', function() 
{
    return new CellPhone();
});

$container->set('Wallet', function() 
{
    return new Wallet();
});

$container->set('MotoKey', function()
{
    return new MotoKey();
});

$container->set('PublicTransportCard', function()
{
    return new PublicTransportCard();
});

//3- Register LeaveHome on Container

$container->set('LeaveHome', function($container, $transportAllowerImplementation)
{
    return new LeaveHome (
        $container->get('HomeKey'),
        $container->get('CellPhone'),
        $container->get('Wallet'),
        $container->get($transportAllowerImplementation)
    );
});

//4- Create an instance of LeaveHome on a sunny day using Container

$containerSun = $container->get('LeaveHome', 'MotoKey');

//5- Create an instance of LeaveHome on a rainy day using Container

$containerRain = $container->get('LeaveHome', 'PublicTransportCard');

//6- Print both instances for console

echo $containerSun->goOutWithFriends() . PHP_EOL;
echo $containerRain->goOutWithFriends() . PHP_EOL;

?>