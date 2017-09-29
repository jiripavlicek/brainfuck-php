<?php

class CommandFactory {
    public function __construct($registry, $program)
    {
        $this->registry = $registry;
        $this->program = $program;
    }

    public function createCommand($commandClass, $programCounter)
    {
        return new $commandClass($this->registry, $this->program, $programCounter);
    }
}