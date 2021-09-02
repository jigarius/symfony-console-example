<?php

namespace Calculator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class DivideCommand extends Command {
  protected function configure() {
    $this->setName('divide')
      ->setAliases(['div'])
      ->setDescription('Divide n1 by n2.')
      ->addArgument('n1', InputArgument::REQUIRED)
      ->addArgument('n2', InputArgument::REQUIRED);
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    $n1 = (int) $input->getArgument('n1');
    $n2 = (int) $input->getArgument('n2');

    if ($n2 === 0) {
      $output->writeln('<error>[error]</error> Cannot divide by zero.');
      return 1;
    }

    $output->writeln($n1 / $n2);
    return 0;
  }
}
