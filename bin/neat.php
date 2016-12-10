<?php

require __DIR__ . '/../vendor/autoload.php';


use Symfony\Component\Console\Application;
use Neat\Command\AboutCommand;

$application = new Application();
$default_command = new AboutCommand();
$application->add($default_command);
$application->setDefaultCommand($default_command->getName());
$application->run();
