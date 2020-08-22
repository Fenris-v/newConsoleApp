<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command
{
    protected function configure()
    {
        $this
            ->setName('test')
            ->setDescription('Do nothing');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Do nothing');
        return Command::SUCCESS;
    }
}