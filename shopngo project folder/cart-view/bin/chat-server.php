<?php
use Ratchet\Server\IoServer; //Fråga Daniel om det här
//use MyApp\Chat;
require '../src/Chat.php';
    require dirname(__DIR__) . '/vendor/autoload.php';

    $server = IoServer::factory(
        new Chat(),
        8080
    );

    $server->run();
