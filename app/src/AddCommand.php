<?php

namespace Calculator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class AddCommand extends Command {
  protected function configure() {
    $this->setName('add')
      ->setDescription('Add n1 and n2.')
      ->addArgument('n1', InputArgument::REQUIRED)
      ->addArgument('n2', InputArgument::REQUIRED);
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    $operands = $input->getArguments();
    $result = array_sum($operands);
    $output->writeln($result);
    return 0;
  }
}
