<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class QuestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('quest');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $questions = new Question('What is your name?'.PHP_EOL);
        $name = $helper->ask($input, $output, $questions);
        $questions = new Question('What is your age?'.PHP_EOL);
        $age = $helper->ask($input, $output, $questions);
        $questions = new ChoiceQuestion('What is your sex?(default male)'.PHP_EOL, ['male', 'female'], 0);
        $sex = $helper->ask($input, $output, $questions);
        $output->writeln("Hello? {$name}, your age is {$age} and your sex is {$sex}");
        return Command::SUCCESS;
    }

}