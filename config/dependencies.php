<?php


use League\Plates\Engine;

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions([
    PDO::class => function (): PDO {
        return new PDO("mysql:host=127.0.0.1;dbname=mvc", "root", "mysql");
    },
    Engine::class => function () {
        $templatePath = __DIR__ . '/../views';
        return new League\Plates\Engine($templatePath);
    }
]);

/** @var \Psr\Container\ContainerInterface $container */
$container = $builder->build();

return $container;
