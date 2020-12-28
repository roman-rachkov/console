<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->addArgument('name', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $output->writeln('Hello, ' . $input->getArgument('name'));

        return Command::SUCCESS;
    }


}