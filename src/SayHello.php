<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHello extends Command
{
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('Do nothing')
            ->addArgument('string', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $str = $input->getArgument('string');

        $output->writeln('Привет, ' . $str);
        return Command::SUCCESS;
    }
}
