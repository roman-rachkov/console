<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RepeatStringCommand extends Command
{

    protected function configure()
    {
        $this
            ->setName('repeat_string')
            ->addArgument('string', InputArgument::REQUIRED)
            ->addOption('times', mode: InputOption::VALUE_OPTIONAL, default: 2)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        for ($i = 0; $i < $input->getOption('times'); $i++){
            $output->writeln($input->getArgument('string'));
        }

        return Command::SUCCESS;
    }

}