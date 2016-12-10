<?php

namespace Neat\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AboutCommand extends Command
{
  protected function configure()
  {
    $this->setName('about')
      ->setDescription('About Neat');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln("This is Neat");
  }
}
