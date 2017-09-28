<?php

class AbstractCommand {

    private $registry;
    private $program;
    private $programCounter;
    
    public function __construct($registry, $program, $programCounter)
    {
        $this->registry = $registry;
        $this->program = $program;
        $this->programCounter = $programCounter;
    }

    public function run()
    {
        return 1;
    }
}