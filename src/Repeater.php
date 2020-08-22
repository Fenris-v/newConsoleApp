<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Repeater extends Command
{
    protected function configure()
    {
        $this
            ->setName('repeater')
            ->setDescription('Do nothing')
            ->addArgument('string', InputArgument::REQUIRED)
            ->addOption('int', null, InputOption::VALUE_OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $str = $input->getArgument('string');
        $repeatCount = $input->getOption('int') && (int)$input->getOption('int') > 0
            ? (int)$input->getOption('int')
            : 2;

        for ($i = 0; $i < $repeatCount; $i++) {
            $output->writeln($str);
        }

        return Command::SUCCESS;
    }
}
