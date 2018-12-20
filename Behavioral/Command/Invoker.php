<?php

namespace DesignPatterns\Behavioral\Command;

class Invoker
{
    private $command = [];

    public function add(CommandInterface $command)
    {
        $this->command[] = $command;
    }

    public function execute()
    {
        $arraylist = [];
        foreach ($this->command as $command) {
            $arraylist[] = $command->execute();
        }
        return $arraylist;
    }
}
