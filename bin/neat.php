<?php

$root = __DIR__ . '/../';
if (file_exists($root . 'vendor/autoload.php')) {
  include_once $root . 'vendor/autoload.php';
}
elseif (file_exists($root . '../../autoload.php')) {
  include_once $root . '../../autoload.php';
}
else {
  echo 'Something goes wrong with your archive' . PHP_EOL .
    'Try downloading again' . PHP_EOL;
  exit(1);
}

use Symfony\Component\Console\Application;
use Neat\Command\AboutCommand;

$application = new Application();
$default_command = new AboutCommand();
$application->add($default_command);
$application->setDefaultCommand($default_command->getName());
$application->run();
