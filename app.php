<?php

require_once __DIR__.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php";

$app =  new Symfony\Component\Console\Application('Change String');

$app->addCommands([new \App\RepeatStringCommand(), new \App\SayHelloCommand()]);

$app->run();
