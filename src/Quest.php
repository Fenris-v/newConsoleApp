<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class Quest extends Command
{
    protected function configure()
    {
        $this
            ->setName('quest')
            ->setDescription('Do nothing');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $questions[] = new Question('Введите имя: ', 'пользователь');
        $questions[] = new Question('Введите возраст: ', 'неизвестен');
        $questions[] = new ChoiceQuestion('Выберите пол: ', ['м', 'ж'], 0);

        foreach ($questions as $key => $question) {
            $answers[] = $helper->ask($input, $output, $question);
        }

        $output->writeln('Привет, ' . $answers[0] . '! Ваш возраст: ' . $answers[1] . ', Ваш пол: ' . $answers[2]);
        return Command::SUCCESS;
    }
}
