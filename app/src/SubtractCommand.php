<?php

namespace Calculator;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SubtractCommand extends Command {
  protected function configure() {
    $this->setName('subtract')
      ->setDescription('Subtract n2 from n1.')
      ->setAliases(['sub'])
      ->addOption('absolute', 'a', InputOption::VALUE_NONE, 'Return absolute value.')
      ->addArgument('n1', InputArgument::REQUIRED)
      ->addArgument('n2', InputArgument::REQUIRED);
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    $n1 = (int) $input->getArgument('n1');
    $n2 = (int) $input->getArgument('n2');
    $result = $n1 - $n2;
    $result = $input->getOption('absolute') ? abs($result) : $result;
    $output->writeln($result);
    return 0;
  }
}
